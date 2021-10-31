<?php

class Fruit{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name=$name;
        $this->color=$color;
    }

    function get_name(){
        return $this->color;
    }

    function __destruct(){
        echo "This {$this->name} is {$this->color}";
    }
}

$apple = new Fruit("apple", "red");
echo $apple->get_name();
?>