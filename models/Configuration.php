<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Configuration
 *
 * @author DIGIFUND
 */
class Configuration extends Model {

    const TABLE_NAME = 'settings';

    public function __construct() {
        parent::__construct(Configuration::TABLE_NAME);
    }

    public function selectAllConfigurations() {
        return $this->selectAll();
    }

    /**
     * Insere as configurações
     * @param array $data
     * @return int Retorna -1 caso o array $data esteja vazio.
     */
    public function insertConfigurations($data = array()) {
        if (is_array($data) && count($data) > 0) {
            return $this->insert($data);
        } else {
            return -1;
        }
    }

}
