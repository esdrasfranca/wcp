<?php

require 'environment.php';

global $config;
$config = array();

if (ENVIRONMENT == 'development') {
    $config['driver'] = 'mysql';
    $config['dbname'] = 'lojavirtual';
    $config['host'] = 'localhost';
    $config['user'] = 'root';
    $config['passw'] = 'admin';
} else {
    $config['dbname'] = '';
    $config['host'] = '';
    $config['user'] = '';
    $config['passw'] = '';
}
$config['root_dir'] = $_SERVER['DOCUMENT_ROOT'] . 'wcp';
$config['url'] = 'http://' . $_SERVER['HTTP_HOST'] . '/wcp';
