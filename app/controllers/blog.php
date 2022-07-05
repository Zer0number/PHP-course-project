<?php

namespace app\controllers;

use \sys\core\View as View;
use \sys\core\Controller as Controller;

class Blog extends Controller {

    public function index(){
        return new View('blog/index.php', [
            'title' => 'Blog'
        ]);
    }
}