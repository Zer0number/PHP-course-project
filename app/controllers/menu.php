<?php

namespace app\controllers;

use \sys\core\View as View;
use \sys\core\Controller as Controller;

class Menu extends Controller {

    public function index(){
        return new View('menu/index.php', [
            'title' => 'Menu'
        ]);
    }
}