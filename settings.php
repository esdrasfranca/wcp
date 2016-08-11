<?php

require 'environment.php';
global $settings;
$settings = array();

if (ENVIRONMENT == 'development') {
    $settings['driver'] = 'mysql';
    $settings['dbname'] = 'schema_wcp';
    $settings['host'] = 'localhost';
    $settings['user'] = 'root';
    $settings['passw'] = 'admin';
} else {
    $settings['dbname'] = '';
    $settings['host'] = '';
    $settings['user'] = '';
    $settings['passw'] = '';
}

$settings['root_dir'] = $_SERVER['DOCUMENT_ROOT'] . 'wcp';
$settings['url'] = 'http://' . $_SERVER['HTTP_HOST'] . '/wcp';
