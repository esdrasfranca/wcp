<?php

/**
 * Created by PhpStorm.
 * User: DIGIFUND
 * Date: 01/09/2016
 * Time: 16:31
 */
class loginController extends Controller
{

    private $modelUser;

    public function __construct()
    {
        $this->modelUser = new Users();
    }

    public function index()
    {
        if (isset($_POST['logar'])) {
            $this->login();
        }
        $this->loadViewInWCP('login', array());
    }

    public function logout()
    {
        global $settings;
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            header('Location: ' . $settings['url_wcp']);
            die();
        }
    }

    private function login()
    {
        global $settings;
        if (!empty($_POST['email']) && !empty($_POST['senha'])) {
            $senha = md5($_POST['senha']);
            $user = $this->modelUser->loginUser($_POST['email'], $senha);

            if ($user) {
                unset($_SESSION['erro_login']);
                $_SESSION['user']['name'] = $user[0]['user_name'];
                $_SESSION['user']['email'] = $user[0]['user_email'];
                $_SESSION['user']['nivel'] = $user[0]['user_level'];
                header('Location: ' . $settings['url_wcp']);
                die();
            } else {
                $_SESSION['erro_login'] = 'Email e/ou senha inválidos';
                header('Location: ' . $settings['url_wcp'] . '/login');
            }
        }
    }


}
