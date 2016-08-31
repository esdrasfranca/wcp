<?php

require_once "settings.php";

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
class ICore
{

    public function run()
    {
        global $settings;
        $currentcAtion = '';
        $currentController = '';
        $param = array();

        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '') {
            $u = explode("souefra", $_SERVER['REQUEST_URI']);
            array_shift($u);
            $u = explode("/", $u[0]);
            array_shift($u);

            if (isset($u[0]) && !empty($u[0]) && $u[0] == 'wcp') {
                array_shift($u);

                if (isset($u[0]) && !empty($u[0])) {
                    $currentController = $u[0] . "Controller";
                    array_shift($u);
                } else {
                    $currentController = "wcpController";
                }

                if (isset($u[0]) && !empty($u[0])) {
                    $currentcAtion = $u[0];
                    array_shift($u);
                } else {
                    $currentcAtion = 'index';
                }

                if(isset($u[0]) && count($u) > 0) {
                    $param = $u;
                }

            } else {
                $currentController = "pagesController";
                $currentcAtion = "index";
                if (isset($u[0]) && !empty($u[0])) {
                    $param = $u;
                    array_shift($u);
                }

            }

            $controller = new $currentController(); //Instancia o controller
            call_user_func_array(array($controller, $currentcAtion), $param);

        }
    }
}
