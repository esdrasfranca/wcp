<?php

/**
 * Created by PhpStorm.
 * User: DIGIFUND
 * Date: 30/08/2016
 * Time: 16:39
 */
class pagesController extends Controller
{



    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }

    public function _index($param) {
        $this->loadTemplateSITE('home', array());
    }
}