<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this templates file, choose Tools | Templates
 * and open the templates in the editor.
 */

/**
 * Description of Controller
 *
 * @author Esdras
 */
abstract class Controller {

    protected $dao;
    public $settings;

    public function __construct() {
        global $settings;
        $this->dao = new DAO();
        $this->settings = $settings;
    }

    public abstract function index();

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

    public function loadViewInWCP($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/wcp_view/' . $viewName . '.php';
    }

    public function loadViewInTemplateSITE($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

    public function loadTemplateWCP($viewName, $viewData = array()) {
        include 'views/templates/wcp/template.php';
    }

    public function loadTemplateSITE($viewName, $viewData = array()) {
        include 'views/templates/default.php';
    }



}