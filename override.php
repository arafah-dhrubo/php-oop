<?php

class Fruit{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit{
    public $weight;
    public function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    //we are redefining the intro method in child class. this is inheritance example
    public function intro(){
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
}

$strawberry = new Strawberry("Strawberry", "Red", 50);
$strawberry->intro();

?>