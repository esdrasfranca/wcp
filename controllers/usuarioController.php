<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarioController
 *
 * @author Esdras
 */
class usuarioController extends Controller
{

    private $usuarioModel;
    private $usuarios;

    public function __construct()
    {
        parent::__construct();
        $this->usuarioModel = new Users();
        $this->usuarios = array();
    }

    private function getUsuarios()
    {
        $result = $this->usuarioModel->selectAllUsers();
        if ($result) {
            return $result;
        }
    }

    public function index()
    {
        if (isset($_POST['enviar'])) {
            $this->novoUsuario();
        }
        $data['usuarios'] = $this->getUsuarios();
        $this->loadTemplateWCP('usuarios', $data);
    }

    public function novo()
    {
        if (isset($_POST['submit_new_user'])) {
            $this->novoUsuario();
        }
        $this->loadTemplateWCP('novo_usuario', array());
    }

    private function novoUsuario()
    {
        global $settings;

        $nome = filter_input(INPUT_POST, 'nome_user', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email_user', FILTER_SANITIZE_EMAIL);
        $nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_NUMBER_INT);
        $senha = md5(filter_input(INPUT_POST, 'email_user', FILTER_SANITIZE_STRING));

        if (!empty($nome) && !empty($email) && !empty($senha)) {
            if (!$this->isExistEmail($email)) {
                $data = array(
                    'user_name' => $nome,
                    'user_email' => $email,
                    'user_passw' => $senha,
                    'user_level' => $nivel
                );

                if ($this->usuarioModel->insertUser($data)) {
                    $data['msg']['type'] = 'success';
                    $data['msg'][] = 'Usuário cadastrado com sucesso';
                    header('Location: ' . $settings['url_wcp'] . '/usuario');
                } else {
                    $data['msg']['type'] = 'erro';
                    $data['msg'][] = 'Falha ao tentar cadastrar o novo usuário';
                    $this->loadTemplateWCP('usuarios', $data);
                }
            } else {
                $data['msg']['type'] = 'erro';
                $data['msg'][] = 'Já existe um usuário com este email.';
                $this->loadTemplateWCP('novo_usuario', $data);
            }
        }
    }

    public function excluir($id)
    {
        global $settings;
        if (!empty($id) && is_numeric($id)) {
            $result = $this->usuarioModel->deleteUser(addslashes($id));
            if ($result) {
                $data['msg']['type'] = 'success';
                $data['msg'][] = 'Usuário excluido com sucesso.';
                header('Location: ' . $settings['url_wcp'] . '/usuario');
            } else {
                $data['msg']['type'] = 'erro';
                $data['msg'][] = 'Falha ao tentar cadastrar o novo usuário';
                $this->loadTemplateWCP('usuarios', $data);
            }
        }
    }

    private function isExistEmail($email)
    {
        $result = $this->usuarioModel->selectUserEmail($email);
        if ($result) {
            return TRUE;
        }
        return FALSE;
    }

    public function editar($id)
    {
        global $settings;
        $data = array();

        if (isset($_POST['alterar'])) {

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

            if (!empty($nome) && !empty($email) && !empty($id) && is_numeric($id)) {

                $data = array(
                    'user_name' => $nome,
                    'user_email' => $email
                );

                if (!empty($_POST['senha'])) {
                    $data['user_passw'] = md5($_POST['senha']);
                }

                $where = array(
                    'user_id' => $id
                );
                var_dump($data);
                var_dump($where);

                $result = $this->usuarioModel->updateUser($data, $where, '');
                if ($result) {
                    header('Location: ' . $settings['url_wcp'] . '/usuario');
                    die();
                }
            }
        } else {
            if (!empty($id) && is_numeric($id)) {

                $id = addslashes($id);
                $result = $this->usuarioModel->selectUser($id);

                if ($result) {
                    $data['usuario'] = $result;
                    $this->loadTemplateWCP('editar_usuario', $data);
                } else {
                    header('Location: ' . $settings['url_wcp'] . '/usuario');
                }
            } else {
                header('Location: ' . $settings['url_wcp'] . '/usuario');
            }
        }
    }
}
