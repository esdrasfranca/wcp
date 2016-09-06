<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this templates file, choose Tools | Templates
 * and open the templates in the editor.
 */

/**
 * Description of configuracao
 *
 * @author DIGIFUND
 */
class configuracaoController extends Controller
{
    private $settingsModel;

    public function __construct()
    {
        parent::__construct();
        $this->settingsModel = new Configuration();
    }

    public function index()
    {
        $data = array();
        if (isset($_POST['salvar'])) {
            $this->addConfiguration();
        } else {
            $data['setting'] = $this->settingsModel->selectAllSettings();
            $this->loadTemplateWCP('config', $data);
        }
    }
}
