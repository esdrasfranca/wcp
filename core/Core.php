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
class Core
{

    public function run()
    {
        $currentcAtion = '';
        $currentController = '';
        $param = array();

        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '') {
            $url = explode("souefra", $_SERVER['REQUEST_URI']);
            array_shift($url);
            $url = explode('/', $url[0]);
            array_shift($url);

            if (isset($url[0]) && $url[0] != '') {
                $currentController = $url[0] . 'Controller';
                array_shift($url);
            } else {
                $currentController = 'homeController';
                $currentcAtion = 'index';
                array_shift($url);
            }

            if (isset($url[0]) && !empty($url[0])) {
                $currentcAtion = $url[0];
                array_shift($url);
            } else {
                $currentcAtion = 'index';
                array_shift($url);
            }

            if (count($url) > 0) {
                $param = $url;
                array_shift($url);
            }
        }

        if (file_exists("controllers/" . $currentController . ".php")) {
            $controller = new $currentController(); //Instancia o controller
        } else {
            $controller = new pagesController();
            $currentcAtion = "_index";
            $page = explode("Controller", $currentController);
            $param = array($page[0]);
        }
        call_user_func_array(array($controller, $currentcAtion), $param);

    }

    private function isSettings()
    {
        global $settings;
        if (count($settings) > 0) {
            return TRUE;
        }
        return FALSE;
    }

}
