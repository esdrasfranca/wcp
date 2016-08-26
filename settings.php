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
    $settings['driver'] = 'mysql';
    $settings['dbname'] = 'schema_wcp';
    $settings['host'] = 'localhost';
    $settings['user'] = 'root';
    $settings['passw'] = '';
}

$confiSite = new Settings();
$confiSite = $confiSite->selectAllSettings();

$settings['root_dir'] = $_SERVER['DOCUMENT_ROOT'] . 'wcp';
$settings['url'] = 'http://' . $_SERVER['HTTP_HOST'] . '/wcp';
$settings['url_site'] = $confiSite['url_site'];
$settings['upload_dir'] = $settings['root_dir'] . '/assets/img';


