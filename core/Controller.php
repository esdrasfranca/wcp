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

    public function loadTemplateWPC($viewName, $viewData = array()) {
        include 'views/template/template.php';
    }

    public function loadTemplateSITE($viewName, $viewData = array()) {
        include 'views/template_site.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/' . $viewName . '.php';
    }

    public function loadViewInWCP($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/viewswcp/' . $viewName . '.php';
    }

}