<?php

require_once "settings.php";

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this templates file, choose Tools | Templates
 * and open the templates in the editor.
 */

/**
 * Description of Core
 *
 * @author Esdras
 */
class Core
{
    public function run()
    {
        global $settings;
        $currentAction = '';
        $currentController = '';
        $param = array();

        if (isset($_SERVER['REQUEST_URI'])) {

            if (strpos($_SERVER['REQUEST_URI'], 'wcp')) {
                if (!isset($_SESSION['user'])) {
                    $currentController = 'loginController';
                    $currentAction = 'index';
                } else {

                    $url = explode('wcp/', $_SERVER['REQUEST_URI']);
                    array_shift($url);

                    if (!empty($url[0]) && strpos($url[0], '/')) {
                        $url = explode('/', $url[0]);
                    }

                    if (isset($url[0]) && !empty($url[0])) {
                        $currentController = $url[0] . 'Controller';
                    } else {
                        $currentController = "wcpController";
                    }
                    array_shift($url);

                    if (isset($url[0]) && !empty($url[0])) {
                        $currentAction = $url[0];
                    } else {
                        $currentAction = 'index';
                    }

                    array_shift($url);

                    if (count($url) > 0) {
                        $param = $url;
                    }
                }

                if (file_exists('controllers/wcp_controllers/' . $currentController . '.php')) {
                    $controller = new $currentController(); //Instancia o controller;
                    if (method_exists($controller, $currentAction)) {
                        call_user_func_array(array($controller, $currentAction), $param);
                    } else {
                        $param = array();
                        $controller = new wcpController();
                        $currentAction = "erro404";
                        call_user_func_array(array($controller, $currentAction), $param);
                    }
                } else {
                    $controller = new wcpController();
                    $controller->erro404();
                }
            } else if (!empty($settings['project_name']) && strpos($_SERVER['REQUEST_URI'], $settings['project_name'])) {
                $url = explode($settings['project_name'] . '/', $_SERVER['REQUEST_URI']);
                array_shift($url);
                $url = explode('/', $url[0]);

                $currentController = 'pagesController';

                if (isset($url[0]) && !empty($url[0])) {
                    $currentAction = $url[0];
                } else {
                    $currentAction = 'index';
                }
                array_shift($url);

                if (count($url) > 0) {
                    $param = $url;
                }

                $controller = new $currentController(); //Instancia o controller;

                if (method_exists($controller, $currentAction)) {
                    call_user_func_array(array($controller, $currentAction), $param);
                } else {
                    $controller = new pagesController();
					$param = array();
                    $currentAction = "erro404";
                    call_user_func_array(array($controller, $currentAction), $param);
                }

            } else {
                $currentController = 'pagesController';
                $url = explode('/', $_SERVER['REQUEST_URI']);
                array_shift($url);

                if (!empty($url[0])) {
                    $currentAction = $url[0];
                } else {
                    $currentAction = 'index';
                }
                array_shift($url);

                if (count($url) > 0) {
                    $param = $url;
                }
				
				$controller = new $currentController(); //Instancia o controller;

                if (method_exists($controller, $currentAction)) {
                    call_user_func_array(array($controller, $currentAction), $param);
                } else {
                    $controller = new pagesController();
                    $controller->erro404();
                }
            }
        }
    }
}