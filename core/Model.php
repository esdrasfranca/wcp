<?php

class Model {

    protected $dao;

    public function __construct() {
        $this->dao = new DAO();
    }

}
