<?php

namespace app\controllers;

use \sys\core\View as View;
use \sys\core\Controller as Controller;

class Contact extends Controller {

    public function index(){
        return new View('contact/index.php', [
            'title' => 'Contact'
        ]);
    }
}