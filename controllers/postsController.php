<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of publicarController
 *
 * @author DIGIFUND
 */
class postsController extends Controller {

    private $postModel;

    public function __construct() {
        parent::__construct();
        $this->postModel = new Posts();
    }

    public function index() {
        if (isset($_POST['enviar'])) {
            $this->addPost();
        }

        $data['posts'] = $this->postModel->selectAllPosts();
        $this->loadTemplate('posts', $data);
    }

    public function novo() {
        $data['categorias'] = $this->getCategorias();
        $this->loadTemplate('novo_post', $data);
    }

    public function excluir($id) {
        global $settings;
        if (!empty($id) && is_numeric($id)) {
            $post = $this->postModel->selectPostById($id);
            $result = $this->postModel->deletePost(array('post_id' => $id));

            if ($result) {
                Util::deleteFile($settings['upload_dir'] .'/' . $post[0]['post_image']);
                header('Location: ' . $settings['url'] . '/posts');
                die();
            } else {
                $data['posts'] = $this->postModel->selectAllPosts();
                $data['msg']['type'] = 'danger';
                $data['msg']['message'] = 'Falha ao tentar excluir o post selecionado.';
                $this->loadTemplate('posts', $data);
            }
        }
    }

    public function editar($id) {
        //echo 'editar';exit;
        global $settings;

        if (isset($_POST['enviar'])) {
            $this->atualizarPost($id);
        } else if (!empty($id) && is_numeric($id)) {
            $result = $this->postModel->selectPostById($id);
            if ($result) {
                $data['post'] = $result;
                $data['categorias'] = $this->getCategorias();
                $this->loadTemplate('editar_post', $data);
            } else {
                header('Location: ' . $settings['url'] . '/posts');
                die();
            }
        } else {
            header('Location: ' . $settings['url'] . '/posts');
            die();
        }
    }

    private function addPost() {
        global $settings;
        $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
        $desc = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_NUMBER_INT);
        $post = $_POST['post'];
        $slug = Util::sanitizeString($titulo);

        $data = array(
            'post_titulo' => $titulo,
            'post_descricao' => $desc,
            'post_post' => $post,
            'post_slug' => $slug,
            'post_image' => '',
            'cat_id' => $categoria
        );
        $result = $this->postModel->insertPost($data);

        if ($result > 0) {
            $img = $this->uploadFile();
            $this->postModel->updatePost(array(
                'post_image' => $img
                    ), array(
                'post_id' => $result
            ));
            header('Location: ' . $settings['url'] . '/posts');
            die();
        }
    }

    private function atualizarPost($id) {
        global $settings;
        if (isset($_POST['enviar'])) {
            $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
            $desc = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
            $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_NUMBER_INT);
            $post = $_POST['post'];
            $slug = Util::sanitizeString($titulo);

            $data = array(
                'post_titulo' => $titulo,
                'post_descricao' => $desc,
                'post_post' => $post,
                'post_slug' => $slug,
                'cat_id' => $categoria
            );

            if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
                $var = $this->uploadFile();
                $data['post_image'] = $var;
                Util::deleteFile($settings['root_dir'] . '/uploads/' . $var);
            }

            $where = array(
                'post_id' => $id
            );
            $result = $this->postModel->updatePost($data, $where);

            if ($result) {
                header('Location: ' . $settings['url'] . '/posts');
                die();
            } else {
                
            }
        }
    }

    private function uploadFile() {
        global $settings;
        //var_dump($_FILES);exit;
        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $up = new Upload();
            $up->setName($_FILES['image']['name']);
            $up->setSize($_FILES['image']['size']);
            $up->setTmp_name($_FILES['image']['tmp_name']);
            $up->setType($_FILES['image']['type']);
            $up->setErro($_FILES['image']['error']);

            return Util::prepareUpload($up);
        }
    }

    private function getCategorias() {
        $cat = new Category();
        return $cat->selectAllCategory();
    }

}
