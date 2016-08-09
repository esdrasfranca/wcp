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

    private $prepareSql;

    public function __construct() {
        parent::__construct();
        $this->prepareSql = new PrepareSQL();
    }

    public function selectAllConfigurations() {
        return $this->dao->selectAll(Configuration::TABLE_NAME);
    }

    public function insertConfigurations($data = array()) {
        if (is_array($data) && count($data) > 0) {
            $sql = $this->prepareSql->insert(Configuration::TABLE_NAME, $data);
            return $this->dao->insert($sql);
        } else {
            return 0;
        }
    }

}
