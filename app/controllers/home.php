<?php

namespace app\controllers;

use \sys\core\View as View;
use \sys\core\Controller as Controller;

class Home extends Controller {

    public function index(){
        return new View('home/index.php', [
            'title' => 'Home'
        ]);
    }
}