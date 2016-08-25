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

        if (isset($_POST['enviar'])) {
            $this->addBanner();
        }


        $result = $this->bannerModel->getBanners();
        if ($result) {
            $data['banners'] = $result;
        }
        $this->loadTemplate('banner', $data);
    }

    public function novo()
    {
        $this->loadTemplate('novo_banner', array());
    }

    private function addBanner()
    {

        global $settings;
        $position = filter_input(INPUT_POST, 'position', FILTER_SANITIZE_NUMBER_INT);

        if (isset($_FILES['file'])) {
            $up = new Upload();
            $up->setErro($_FILES['file']['error']);
            $up->setName($_FILES['file']['name']);
            $up->setSize($_FILES['file']['size']);
            $up->setTmp_name($_FILES['file']['tmp_name']);
            $up->setType($_FILES['file']['type']);
            $image = Util::prepareUpload($up);
        }

        $this->bannerModel->setBanner(array(
            'ban_image' => $image,
            'ban_position' => $position
        ));

        header('Location: ' . $settings['url'] . '/banner');

    }


}