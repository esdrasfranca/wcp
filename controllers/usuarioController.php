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
class usuarioController extends Controller {

    private $usuarioModel;
    private $usuarios;

    public function __construct() {
        parent::__construct();
        $this->usuarioModel = new Users();
        $this->usuarios = array();
    }

    public function index() {
        if (isset($_POST['enviar'])) {
            $this->novoUsuario();
        }
        $this->usuarios['usuarios'] = $this->usuarioModel->selectAllUsers();
        $this->loadTemplate('usuarios', $this->usuarios);
    }

    public function novo() {
        if (isset($_POST['submit_new_user'])) {
            $this->novoUsuario();
        }
        $this->loadTemplate('novo_usuario', array());
    }

    private function novoUsuario() {
        global $settings;

        $nome = filter_input(INPUT_POST, 'nome_user', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email_user', FILTER_SANITIZE_EMAIL);
        $senha = md5(filter_input(INPUT_POST, 'email_user', FILTER_SANITIZE_STRING));

        if (!empty($nome) && !empty($email) && !empty($senha)) {
            if (!$this->isExistEmail($email)) {
                $data = array(
                    'user_name' => $nome,
                    'user_email' => $email,
                    'user_passw' => $senha
                );

                if ($this->usuarioModel->insertUser($data)) {
                    $data['msg']['type'] = 'success';
                    $data['msg'][] = 'Usuário cadastrado com sucesso';
                    header('Location: ' . $settings['url'] . '/usuario');
                } else {
                    $data['msg']['type'] = 'erro';
                    $data['msg'][] = 'Falha ao tentar cadastrar o novo usuário';
                    $this->loadTemplate('usuarios', $data);
                }
            } else {
                $data['msg']['type'] = 'erro';
                $data['msg'][] = 'Já existe um usuário com este email.';
                $this->loadTemplate('novo_usuario', $data);
            }
        }
    }

    public function excluir($id) {
        global $settings;
        if (!empty($id) && is_numeric($id)) {
            $result = $this->usuarioModel->deleteUser(addslashes($id));
            if ($result) {
                $data['msg']['type'] = 'success';
                $data['msg'][] = 'Usuário excluido com sucesso.';
                header('Location: ' . $settings['url'] . '/usuario');
            } else {
                $data['msg']['type'] = 'erro';
                $data['msg'][] = 'Falha ao tentar cadastrar o novo usuário';
                $this->loadTemplate('usuarios', $data);
            }
        }
    }

    public function editar($id) {
        if (!empty($id) && is_numeric($id)) {
            $id = addslashes($id);
            $data['usuario'] = $this->usuarioModel->selectUser($id);
            $this->loadTemplate('editar', $data);
        }
    }

    private function isExistEmail($email) {
        $result = $this->usuarioModel->selectUserEmail(addslashes($email));
        if ($result) {
            return true;
        }
        return FALSE;
    }

//put your code here
}
