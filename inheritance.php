<?php

class Fruit{
    public $name;
    public $color;
public function _construct($name, $color)
{
    $this->name=$name;
    $this->color=$color;
}
public function __destruct()
{
    echo "{$this->name} is {$this->color}";
}
}

class Apple extends Fruit{
    public function message(){
        echo "Am I fruit or berry?";
    }
}

$blueberry = new Apple("Blue", "Berry");
// $blueberry->color="Blue";
// $blueberry->name="BlueBerry";
$blueberry->message();
?>