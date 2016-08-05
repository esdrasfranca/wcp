<?php

require 'environment.php';

global $config;
$config = array();

if (ENVIRONMENT == 'development') {

    $url = array(
        "cont" => 'http://' . $_SERVER['HTTP_HOST'] . '/wcp',
        "cas" => 'http://' . $_SERVER['HTTP_HOST'] . '/wcp',
    );

    $config['driver'] = 'mysql';
    $config['dbname'] = 'lojavirtual';
    $config['host'] = 'localhost';
    $config['user'] = 'root';
    $config['passw'] = 'admin';
    $config['root_dir'] = $_SERVER['DOCUMENT_ROOT'] . 'wcp';
    $config['url'] = $url['cont'];
} else {
    $config['dbname'] = 'lojavirtual';
    $config['host'] = 'localhost';
    $config['user'] = 'root';
    $config['passw'] = '';
}