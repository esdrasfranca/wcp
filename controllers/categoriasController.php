<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categoriasController
 *
 * @author DIGIFUND
 */
class categoriasController extends Controller {

    private $categoriaModel;

    public function __construct() {
        parent::__construct();
        $this->categoriaModel = new Category();
    }

    public function index() {
        global $settings;
        $data = array();
        if (isset($_POST['salvar']) && $_POST['nova-cat'] != '') {
            if ($this->addCategoria()) {
                header('Location: ' . $settings['url'] . '/categorias');
                die();
            } else {
                $data['msg']['type'] = 'error';
                $data['msg']['message'] = 'Problemas ao inserir os dados.';
            }
        }

        $categorias = $this->categoriaModel->selectAllCategory();
        if ($categorias) {
            $data['categorias'] = $categorias;
        }
        $this->loadTemplate('categorias', $data);
    }

    private function addCategoria() {
        if (isset($_POST['nova-cat']) && $_POST['nova-cat'] != '') {
            $nome = strtoupper(filter_input(INPUT_POST, 'nova-cat', FILTER_SANITIZE_STRING));
            return $this->categoriaModel->insertCategory(array('cat_name' => $nome));
        }
        return false;
    }

}
