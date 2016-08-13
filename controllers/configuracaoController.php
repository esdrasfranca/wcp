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
class configuracaoController extends Controller {

    private $configurations;

    public function __construct() {
        parent::__construct();
        $this->configurations = new Configuration();
    }

    public function index() {
        if (isset($_POST['enviar'])) {
            $this->addConfiguration();
        }
        $this->loadTemplate('config', array());
    }

    private function addConfiguration() {
        $url = filter_input(INPUT_POST, 'url_site', FILTER_SANITIZE_STRING);
        $host = filter_input(INPUT_POST, 'dbhost', FILTER_SANITIZE_STRING);
        $dbName = filter_input(INPUT_POST, 'dbname', FILTER_SANITIZE_STRING);
        $dbuser = filter_input(INPUT_POST, 'dbuser', FILTER_SANITIZE_STRING);
        $dbdrive = filter_input(INPUT_POST, 'dbdrive', FILTER_SANITIZE_STRING);
        $dbpassw = filter_input(INPUT_POST, 'dbpassw', FILTER_SANITIZE_STRING);

        $array_url = str_split($url);

        if ($array_url[count($array_url) - 1] == '/') {
            array_pop($array_url);
        }
        $url = implode('', $array_url);

        $result = $this->configurations->insertConfigurations(array(
            'url_site' => $url,
            'db_host' => $host,
            'db_passw' => $dbpassw,
            'db_user' => $dbuser,
            'db_drive' => $dbdrive,
            'db_name' => $dbName
        ));

        if ($result > 0) {
            header('Location: /wcp/home');
            die();
        } else {
            $this->loadTemplate('config', array());
        }
    }

}
