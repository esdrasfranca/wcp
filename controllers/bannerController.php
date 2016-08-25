<?php

/**
 * Created by PhpStorm.
 * User: Esdras
 * Date: 24/08/2016
 * Time: 23:28
 */
class bannerController extends Controller
{

    private $bannerModel;

    public function __construct()
    {
        $this->bannerModel = new Banner();
    }

    public function index()
    {

        $data = array();
        $result = $this->bannerModel->getBanners();
        if($result) {
            $data['banners'] = $result;
        }
        $this->loadTemplate('banner', $data);
    }



}