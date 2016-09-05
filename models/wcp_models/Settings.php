<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this templates file, choose Tools | Templates
 * and open the templates in the editor.
 */

/**
 * Description of Configuration
 *
 * @author DIGIFUND
 */
class Settings extends Model
{

    const TABLE_NAME = 'settings';

    public function __construct()
    {
        parent::__construct(Settings::TABLE_NAME);
    }

    public function selectAllSettings()
    {
        $return = $this->selectAll();
        if (count($return) > 0) {
            return $return[0];
        }
        return FALSE;
    }

    /**
     * @param array $data Parâmetros a serem inseridos na tebela
     * @return bool|int Retorna TRUE caso a insersão seja realizada e FALSE caso haja alguma falha. Retorna -1 caso o array data esteja vazio.
     */
    public function insertSettings($data = array())
    {
        if (is_array($data) && count($data) > 0) {
            return $this->insert($data);
        } else {
            return -1;
        }
    }

}
