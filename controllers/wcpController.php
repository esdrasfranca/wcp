<?php

class wcpController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        global $settings;
        if ($this->isLoagado()) {
            $this->loadTemplateWPC("home", array());

        } else {
            header('Location: ' . $settings['url'] . '/wcp/login');
            die();
        }
    }

    public function erro404()
    {
        $this->loadTemplateWPC('404', array());
    }

    public function login()
    {
        $this->loadViewInWCP('login', array());
    }

    private function isLoagado()
    {
        if (isset($_SESSION['user']) && (!empty($_SESSION['user']))) {
            return TRUE;
        }
        return TRUE;
    }
}
