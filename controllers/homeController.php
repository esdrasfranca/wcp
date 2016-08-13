<?php

class homeController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->loadTemplate("home", array());
    }

    public function erro404() {
        $this->loadTemplate('404', array());
    }

}
