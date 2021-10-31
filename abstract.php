<?php

abstract class ParentClass{
    //Abstract Method with an argument
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass{
    public function prefixName($name){
        if($name == "John Doe"){
            
        }
    }
}

?>