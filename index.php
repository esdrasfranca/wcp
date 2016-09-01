<?php
session_start();
spl_autoload_register(function($class) {
    if (strpos($class, "Controller") && file_exists('controllers/' . $class . '.php')) {
        require_once 'controllers/' . $class . '.php';
    } else if (file_exists('models/' . $class . '.php')) {
        require_once 'models/' . $class . '.php';
    } else if (file_exists('core/' . $class . '.php')) {
        require_once 'core/' . $class . '.php';
    } else {
        /*header('Location: home/erro404');
        die();*/
    }
});

$core = new Core();
$core->run();
