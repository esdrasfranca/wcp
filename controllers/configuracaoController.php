<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
        $this->settingsModel = new Settings();
    }

    public function index()
    {
        $data = array();
        if (isset($_POST['salvar'])) {
            $this->addConfiguration();
        } else {
            $data['setting'] = $this->settingsModel->selectAllSettings();
            $this->loadTemplate('config', $data);
        }
    }

    private function addConfiguration()
    {
        global $settings;
        $url = filter_input(INPUT_POST, 'url_site', FILTER_SANITIZE_STRING);
        $array_url = str_split($url);

        if ($array_url[count($array_url) - 1] == '/') {
            array_pop($array_url);
        }
        $url = implode('', $array_url);
        $result = $this->settingsModel->insertSettings(array(
            'url_site' => $url
        ));

        if ($result > 0) {
            header('Location:  ' . $settings['url']);
            die();
        } else {
            $this->loadTemplate('config', array());
        }
    }

    public function configure()
    {
        $this->loadTemplate('config', array());
    }

}
