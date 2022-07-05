<?php

namespace sys\core;

use \app\models\User as User;
use \sys\lib\Field as Field;

class Form {
    public $name;
    public $className;
    public $methodName;
    public $actionPath;
    public $enctype;
    public $fields;

    public function generate(){
        echo('<form');
        echo(' id="'.$this->name.'"');
        echo(' class="'.$this->className.' w-100 mt-5"');
        echo(' method="'.$this->methodName.'"');
        echo(' action="'.$this->actionPath.'"');
        if($this->name === 'regform'){
            echo(' onsubmit="return false"');
        }
        echo('>');

        if(is_array($this->fields) && count($this->fields) > 0){
            foreach($this->fields as $field){
                if($field instanceof Field){
                    echo('<div class="form-group">');
                    echo('<label>');
                    echo(ucfirst($field->name).':');
                    echo('/<label>');
                    $field->generate();
                    echo('<div class="error" id="'.$field->name.'-error"></div>');
                    echo('</div>');
                }
            }
        }

        echo('<input id="submit" type="submit" name="submit" value="Send" class="btn btn-success my-btn">');
        echo('<input type="reset" name="reset" value="Reset" class="btn btn-danger my-btn">');

        echo('</form>');
    }

    public function fill(){
        if(is_array($this->fields) && count($this->fields) > 0){
            foreach($this->fields as $field){
                if(isset($_POST[$field->name])){
                    $field->fieldValue = $_POST[$field->name];
                }
            }
        }
    }
}