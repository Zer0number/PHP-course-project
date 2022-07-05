<?php

namespace sys\lib;

require_once('sys/config/segments.php');

class Router{
    private $controllerName;
    private $actionName;
    private $paramValue;

    public function __construct(){
        $this->controllerName = 'home';
        $this->actionName = 'index';
        $this->paramValue = '';
        $this->parse_uri();
    }

    private function parse_uri(){
        $uri = $_SERVER['REQUEST_URI'];
        $uriParts = explode('/', $uri);
        $correct = ADDITIONAL_SEGMENTS;

        if ($uriParts[2 + $correct] !== '') {
            $this->controllerName = $uriParts[2 + $correct];
        }

        if (count($uriParts) > 3 + $correct) {
            $this->actionName = $uriParts[3 + $correct];
        }

        if (count($uriParts) > 4 + $correct) {
            $this->paramValue = $uriParts[4 + $correct];
        }
    }

    private function define_controller_class(){
        return 'app\\controllers\\'.ucfirst($this->controllerName);
    }

    private function call_page_404(){
        $this->controllerName = 'errors';
        $controllerClass = $this->define_controller_class();
        $controller = new $controllerClass;
        $controller->not_found();
    }

    public function run(){
        $controllerClass = $this->define_controller_class();
        if(!class_exists($controllerClass)){
            $this->call_page_404();
        } else {
            $controller = new $controllerClass;
            if(!method_exists($controller, $this->actionName)){
                $this->call_page_404();
            } else {
                $action = $this->actionName;
                if($this->paramValue !== ''){
                    $param = $this->paramValue;
                    $controller->$action($param);
                } else {
                    $controller->$action();
                }
            }
        }
    }
}