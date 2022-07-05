<?php

namespace app\forms;

use \sys\core\Form as Form;
use \sys\lib\Field as Field;

class Regform extends Form {
    public function __construct(){
        $this->name = 'regform';
        $this->className = 'reg-form';
        $this->methodName = 'POST';
        $this->actionPath = '#';
        $this->enctype = '';
        $this->fields = [
            new Field('login', 'input', 'text', 'form-contol'),
            new Field('pass1', 'input', 'password', 'form-contol'),
            new Field('pass2', 'input', 'password', 'form-contol'),
            new Field('email', 'input', 'email', 'form-contol')
        ];
    }
}