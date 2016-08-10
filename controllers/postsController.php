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
        $cat = new Category();
        $data['categorias'] = $cat->selectAllCategory();
        
        $this->loadTemplate('novo_post', $data);
    }

    private function addPost() {
        global $settings;
        $titulo = filter_input(INPUT_POST, 'titulo_post', FILTER_SANITIZE_STRING);
        $desc = filter_input(INPUT_POST, 'desc_post', FILTER_SANITIZE_STRING);
        $post = $_POST['post'];

        $slug = Util::sanitizeString($titulo);

        $data = array(
            'post_titulo' => $titulo,
            'post_descricao' => $desc,
            'post_post' => $post,
            'post_slug' => $slug
        );
        $result = $this->postModel->insertPost($data);

        if ($result > 0) {
            header('Location: ' . $settings['url'] . '/posts');
        }
    }

    private function getSlug($string) {

        if (!empty($string)) {
            $string = Util::sanitizeString($string);
            $string = strtolower($string);
        }

        echo $string;
        exit;
    }

}
