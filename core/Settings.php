<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Settings
 *
 * @author Esdras
 */
class Settings extends Model {

    const TABLE_NAME = 'settings';

    public function __construct() {
        parent::__construct(Settings::TABLE_NAME);
    }

    public function getSettings() {
        return $this->selectAll();
    }

}
