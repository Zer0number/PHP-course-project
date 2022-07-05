<?php

namespace app\forms;

use \sys\core\Form as Form;
use \sys\lib\Field as Field;

class Regform extends Form {
    public function __construct(){
        $this->name = 'entryform';
        $this->className = 'entry-form';
        $this->methodName = 'GET';
        $this->actionPath = '#';
        $this->enctype = '';
        $this->fields = [
            new Field('email', 'input', 'email', 'form-contol'),
            new Field('pass1', 'input', 'password', 'form-contol')
        ];
    }
}