<?php

require 'settings.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this templates file, choose Tools | Templates
 * and open the templates in the editor.
 */

/**
 * Description of Connection
 *
 * @author Esdras
 */
class Connection
{

    private static $conn = NULL;

    public static function getInstance()
    {
        if (self::$conn == NULL) {
            global $settings;
            $dsn = $settings['driver'] . ":host=" . $settings['host'] . ";dbname=" . $settings['dbname'];
            try {
                self::$conn = new PDO($dsn, $settings['user'], $settings['passw']);
            } catch (PDOException $exc) {
                echo $exc->getTraceAsString();
                throw new PDOException("Falha ao criar a conexão com BD. " . $exc);
            }
        }
        return self::$conn;
    }

}
