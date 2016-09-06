<?php
require_once 'environment.php';
global $settings;
$settings = array();

if (ENVIRONMENT == 'development') {
    $settings['driver'] = 'mysql';
    $settings['dbname'] = 'schema_wcp';
    $settings['host'] = 'localhost';
    $settings['user'] = 'root';
    $settings['passw'] = '';
} else {
    $settings['driver'] = 'mysql';
    $settings['dbname'] = 'schema_wcp';
    $settings['host'] = 'localhost';
    $settings['user'] = 'root';
    $settings['passw'] = '';
}

$settings['project_name'] = '';
$settings['url_base'] = "http://". $_SERVER['HTTP_HOST'] . '/wcp';
$settings['url_wcp'] = $settings['url_base'];
$settings['root_path'] = $_SERVER['DOCUMENT_ROOT'] . 'wcp';
$settings['upload_path'] = $settings['root_path'] . '/upload';