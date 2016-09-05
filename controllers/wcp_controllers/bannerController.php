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

        if (isset($_POST['salvar'])) {
            $this->adicionarBanner();
        } else if (isset($_POST['atualizar'])) {
            $this->atualizarBanner($_POST['id_banner']);
        } else {
            $result = $this->bannerModel->selectAllBanners();
            if ($result) {
                $data['banners'] = $result;
            }
            $this->loadTemplateWCP('banner', $data);
        }


    }

    public function novo()
    {
        $this->loadTemplateWCP('novo_banner', array());
    }

    public function editar($id)
    {
        global $settings;
        if (isset($id) && is_numeric($id)) {
            $data = array();
            $banner = $this->bannerModel->selectBannerById($id);

            if ($banner) {
                $data['banner'] = $banner;
            }

            $this->loadTemplateWCP('editar_banner', $data);

        } else {
            header('Location: ' . $settings['url_wcp'] . '/banner');
            die();
        }
    }

    public function excluir($id)
    {
        global $settings;
        if (!empty($id) && is_numeric($id)) {
            $banner = $this->bannerModel->selectBannerById($id);
            $return = $this->bannerModel->deleteBanner($id);
            if ($return) {
                Util::deleteFile($settings['upload_path'] . "/" . $banner[0]['ban_image']);
            }
        }
        header('Location: ' . $settings['url_wcp'] . '/banner');
        die();
    }

    private function adicionarBanner()
    {

        global $settings;

        $data = array();
        $data['ban_position'] = filter_input(INPUT_POST, 'position', FILTER_SANITIZE_NUMBER_INT);

        if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
            $up = new File();
            $up->setErro($_FILES['file']['error']);
            $up->setName($_FILES['file']['name']);
            $up->setSize($_FILES['file']['size']);
            $up->setTmp_name($_FILES['file']['tmp_name']);
            $up->setType($_FILES['file']['type']);
            $image = Util::prepareUpload($up);
            $data['ban_image'] = $image;
        }
        $this->bannerModel->insertBanner($data);
        header('Location: ' . $settings['url_wcp'] . '/banner');
    }

    private function atualizarBanner($id)
    {
        global $settings;
        if (isset($_POST['position'])) {
            $data = array(
                'ban_position' => $_POST['position']
            );

            if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
                $file = new File();
                $file->setName($_FILES['file']['name']);
                $file->setTmp_name($_FILES['file']['tmp_name']);
                $file->setSize($_FILES['file']['size']);
                $file->setType($_FILES['file']['type']);
                $file->setErro($_FILES['file']['error']);

                $file_name = Util::prepareUpload($file);

                if ($file_name != Util::UPLOAD_ERROR_FAIL && $file_name != Util::UPLOAD_ERROR_NO_SUPORT) {
                    $data['ban_image'] = $file_name;
                }
            }

            $banner = $this->bannerModel->selectBannerById($id);
            Util::deleteFile($settings['upload_path'] . '/' . $banner[0]['ban_image']);
            $this->bannerModel->updateBanner($data, array('ban_id' => $id));
            header('Location: ' . $settings['url_wcp'] . '/banner');
            die();

        }
    }


}






















