<?php

namespace sys\lib;

class Field {
    public $name;
    public $tagName;
    public $typeName;
    public $className;
    public $fieldValue;

    public function __construct($name, $tagName, $typeName, $className, $fieldValue = ''){
        $this->name = $name;
        $this->tagName = $tagName;
        $this->typeName = $typeName;
        $this->className = $className;
        $this->fieldValue = $fieldValue;
    }

    public function generate(){
        if($this->tagName === 'input'){
            echo('<');
            echo($this->tagName);
            echo(' type="'.$this->typeName.'"');
            echo(' id="'.$this->name.'"');
            echo(' name="'.$this->name.'"');
            echo(' class="'.$this->className.'"');
            echo(' required');
            echo('>');
        }
    }
}