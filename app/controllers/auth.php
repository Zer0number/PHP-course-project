<?php

namespace app\controllers;

use \app\models\User as User;
use \app\forms\Regform as Regform;
use \app\forms\Entryform as Entryform;
use \sys\core\Controller as Controller;
use \sys\core\View as View;

class Auth extends Controller {
    public function __construct(){
        parent::__construct(new User());
    }

    public function reg(){
        $form = new Regform();
        if(empty($_POST['submit'])){
            return new View('auth/reg.php', [
                'title' => 'Registration',
                'form' => $form,
                'script' => View::RES.'/js/reg.js'
            ]);
        }
        else {
            $form->fill();

            $login = $form->fields[0]->fieldValue;
            $passw = md5($form->fields[1]->fieldValue);
            $email = $form->fields[3]->fieldValue;

            $regdate = date('Y-m-d H:i:s');
            $role_id = 2;
            $status_id = 1;
            $confirm = 0;

            $this->model->register($login, $passw, $email, $regdate, $role_id, $status_id, $confirm);
            $message = 'You successfuly registered<hr>';
            $message .= "Confirmation was send to your email: $email";

            return new View('auth/reginfo.php', [
                'title' => 'Register-Info',
                'message' => $message,
            ]);
        }
    }

    // public function login(){
    //     $form = new Entryform();
    //     if(empty($_POST['submit'])){
    //         return new View('auth/login.php', [
    //             'title' => 'Login',
    //             'form' => $form
    //         ]);
    //     }
    //     else {
    //         $form->fill();

    //         $login = $form->fields[0]->fieldValue;
    //         $passw = md5($form->fields[1]->fieldValue);
    //         $email = $form->fields[3]->fieldValue;

    //         $this->model->login($login, $passw);
    //         $message = 'You successfuly logged in<hr>';

    //         return $message;
    //     }
    // }

    public function ajax_check_login(){
        $loginX = $POST['login'];
        if($this->model->check_login($loginX)){
            echo('свободен');
        }
        else{
            echo('занят');
        }
    }
}