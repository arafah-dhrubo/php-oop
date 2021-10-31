<?php
class Fruit{
    //properties
    public $name;
    public $color;

    public function set_name($name){
        $this->name=$name;
    }

    public function get_name(){
        return $this->name;
    }
}

$apple = new Fruit();
$apple->set_name("Apple");
echo $apple->get_name();
echo $apple->name;
var_dump($apple instanceof Fruit);
?>