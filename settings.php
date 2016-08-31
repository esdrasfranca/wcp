<?php
require_once 'environment.php';
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

/*CONFIGURAÇÕES WCP*/
$settings['root_dir'] = (empty($settings['dir']) ? $_SERVER['DOCUMENT_ROOT'] : $_SERVER['DOCUMENT_ROOT'] . $settings['dir']) ;
$settings['url'] = (empty($settings['dir']) ? 'http://' . $_SERVER['HTTP_HOST'] : 'http://' . $_SERVER['HTTP_HOST'] . '/' . $settings['dir']);
$settings['upload_dir'] = $settings['root_dir'] . '/assets/img';

/*CONFIGURAÇÕES SITE*/
$settings['dir'] = "wcp";
$settings['url_site'] = $confiSite['url_site'];

