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
class categoriasController extends Controller
{

    private $categoriaModel;

    public function __construct()
    {
        parent::__construct();
        $this->categoriaModel = new Category();
    }

    public function index()
    {
        global $settings;

        if (isset($_POST['salvar'])) {
            $this->addCategoria();
        }

        $data = array();
        $categorias = $this->categoriaModel->selectAllCategory();
        $data['categorias'] = $categorias;
        $this->loadTemplate('categorias', $data);
    }

    public function excluir($id)
    {
        global $settings;
        if (!empty($id) && is_numeric($id)) {
            if ($this->categoriaModel->deleteCategory($id)) {
                header('Location: ' . $settings['url'] . '/categorias');
                die();
            }
        }
    }

    private function addCategoria()
    {
        global $settings;
        if (isset($_POST['nova-cat']) && $_POST['nova-cat'] != '') {
            $nome = strtoupper(filter_input(INPUT_POST, 'nova-cat', FILTER_SANITIZE_STRING));
            if ($this->categoriaModel->insertCategory(array('cat_name' => $nome))) {
                header('Location: ' . $settings['url'] . '/categorias');
                die();
            }
        }
    }
}
