<?php

spl_autoload_register(function ($classPath){
    $classPath = ltrim($classPath, '\\');

    $className = '';
    $fileName = '';
    $namespace = '';

    $slashPos = strrpos($classPath, '\\');

    if($slashPos > -1){
        $namespace = substr($classPath, 0, $slashPos);
        $className = substr($classPath, $slashPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace).DIRECTORY_SEPARATOR;
    }

    $fileName .= str_replace('\\', DIRECTORY_SEPARATOR, lcfirst($className)).'.php';
    if(file_exists($fileName)){
        require_once($fileName);
    } else {
        echo('<h1>Class Not Found</h1>');
    }
});