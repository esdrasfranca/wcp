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
class publicarController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        if (isset($_POST['enviar'])) {
            $this->addPost();
        }

        $this->loadTemplate('novo_post', array());
    }

    private function addPost() {
        
        $titulo = filter_input(INPUT_POST, 'titulo_post', FILTER_SANITIZE_STRING);
        $desc = filter_input(INPUT_POST, 'desc_post', FILTER_SANITIZE_STRING);
        $post = $_POST['post'];
        $data['post'] = $post;
        var_dump($_POST);exit;
        
        $this->loadTemplate('teste', $data);
        
    }

}
