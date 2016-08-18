<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Esdras
 */
abstract class Controller {

    protected $dao;

    public function __construct() {
        $this->dao = new DAO();
    }

    public abstract function index();

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {
        include 'views/template/template2.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

}
