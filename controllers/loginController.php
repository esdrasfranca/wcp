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

        if(isset($_POST['logar'])) {
           $this->login();
        }

        $this->loadViewInWCP('login', array());
    }

    private function login() {
        global $settings;
        if(!empty($_POST['email']) && !empty($_POST['senha'])) {
            $senha = md5($_POST['senha']);
            $user = $this->modelUser->getUserByEmailAndPassw($_POST['email'], $senha);

            if($user) {
                $_SESSION['user']['name'] = $user[0]['user_name'];
                $_SESSION['user']['email'] = $user[0]['user_email'];
                header('Location: ' . $settings['url_wcp']);
                die();
            } else {
                $data['erro_login'] = "Email ou senha inválidos";
                $this->loadViewInWCP('login', $data);
            }

            var_dump($user);exit;
        }
     }
}
