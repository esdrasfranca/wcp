<?php

require_once './config.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author Esdras
 */
class Connection {

    private static $conn = NULL;

    public static function getInstance() {
        if (self::$conn == NULL) {
            global $config;
            $dsn = $config['driver'] . ":host=" . $config['host'] . ";dbname=" . $config['dbname'];
            try {
                self::$conn = new PDO($dsn, $config['user'], $config['passw']);
            } catch (PDOException $exc) {
                echo $exc->getTraceAsString();
                throw new PDOException("Falha ao criar a conexão com BD. " . $exc);
            }
        }
        return self::$conn;
    }

}
