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

    /**
     *
     */
    public function run()
    {
        global $settings;
        $currentcAtion = '';
        $currentController = '';
        $param = array();
//        var_dump($settings);
//        exit;

        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '') {

            if (strpos($_SERVER['REQUEST_URI'], 'wcp')) {
                $u = explode("/wcp/", $_SERVER['REQUEST_URI']);
                array_shift($u);
                if (!empty($u[0])) {
                    $u = explode("/", $u[0]);
                }

                if (isset($u[0]) && !empty($u[0])) {
                    $currentController = $u[0] . 'Controller';
                } else {
                    $currentController = 'wcpController';
                }
                array_shift($u);

                if (isset($u[0]) && !empty($u[0])) {
                    $currentcAtion = $u[0];
                } else {
                    $currentcAtion = 'index';
                }
                array_shift($u);

                if (isset($u[0]) && count($u) > 0) {
                    $param = $u;
                }
                echo $currentController . '::'. $currentcAtion;
//                var_dump($u);exit;
            } else {
                $currentController = "pagesController";
                if ($settings['dir'] == '/') {
//                    $u = explode($settings['dir'], $_SERVER['REQUEST_URI']);
//                    var_dump($u);exit;
//                    array_shift($u);
                } else {
                    $u = explode($settings['dir'] . '/', $_SERVER['REQUEST_URI']);
                    array_shift($u);
                    $u = explode('/', $u[0]);

                    if (count($u) > 0 && !empty($u[0])) {
                        $currentcAtion = $u[0];
                    } else {
                        $currentcAtion = 'index';
                    }
                    array_shift($u);

                    if (count($u) > 0 && !empty($u[0])) {
                        $param = $u;
                    }
                }
            }
            $controller = new $currentController(); //Instancia o controller
            call_user_func_array(array($controller, $currentcAtion), $param);
        }
    }
}