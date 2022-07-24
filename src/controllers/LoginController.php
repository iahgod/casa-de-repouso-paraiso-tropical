<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;
use \src\handlers\ConfigHandler;
date_default_timezone_set('America/Sao_Paulo');
class LoginController extends Controller {

    public function signin() {
        $config = ConfigHandler::get();
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('login', [
            'config'=>$config,
            'flash' => $flash
        ]);
    }

    public function signinAction() {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'senha');

        if($email && $password) {
            $token = UserHandler::verifyLogin($email, $password);
            if($token) {
                $user = UserHandler::get($token);
                $_SESSION['token'] = $token;
                $this->redirect('/admin');
                
            } else {
                $_SESSION['flash'] = 'E-mail e/ou senha não conferem.';
                $this->redirect('/login');
            }
        } else {
            $_SESSION['flash'] = 'Digite todos os campos.';
            $this->redirect('/login');
        }
    }

    public function signup() {
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('signup', [
            'flash' => $flash
        ]);
    }


    public function logout() {
        $_SESSION['token'] = '';
        $this->redirect('/admin/login');
    }

}