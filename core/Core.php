<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Core
 *
 * @author Esdras
 */
class Core {

    public function run() {
        $currencecAtion = null;
        $currenceController = null;
        $params = array();

        $url = explode("index.php", $_SERVER['PHP_SELF']);
        $url = end($url);
        if (!empty($url)) {
            $url = explode("/", $url);
            array_shift($url);

            $currenceController = $url[0] . 'Controller';
            array_shift($url);

            if (isset($url[0]) && $url[0] != "") {
                $currenceAction = $url[0];
                array_shift($url);
            } else {
                $currenceAction = "index";
            }

            if (count($url) > 0) {
                $params = $url;
            }
        } else {
            $currenceController = "homeController";
            $currenceAction = "index";
        }
        
        $controller = new $currenceController(); //Instancia o controller
        call_user_func_array(array($controller, $currenceAction), $params);
    }

}
