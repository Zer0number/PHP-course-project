<?php

namespace app\controllers;

use \sys\core\View as View;
use \sys\core\Controller as Controller;

class About extends Controller {

    public function index(){
        return new View('about/index.php', [
            'title' => 'About'
        ]);
    }
}