<?php
session_start();
spl_autoload_register(function($class) {

    if (strpos($class, "Controller")) {
        if(file_exists('controllers/' . $class . '.php')) {
            require_once 'controllers/' . $class . '.php';
        } else if(file_exists('controllers/wcp_controllers/' . $class . '.php')) {
            require_once 'controllers/wcp_controllers/' . $class . '.php';
        }
    } else if (file_exists('models/'.$class . '.php')) {
        require_once 'models/' . $class . '.php';
    }else if(file_exists('models/wcp_models/'.$class . '.php')) {
        require_once 'models/wcp_models/' . $class . '.php';
    } else if (file_exists('core/'.$class . '.php')){
        require_once 'core/' . $class . '.php';
    }
});

$core = new Core();
$core->run();
