<?php

class Person{
   public $name;
   public $roll;
   protected $section;
   function __destruct(){
       echo "{$this->name} is {$this->roll} in {$this->section}";
   }
   protected function hello(){
       echo "Said Hello Form DIU";
   }
}

class Student extends Person{
    public function __construct($name, $roll, $section){
        $this->name=$name;
        $this->roll=$roll;
        $this->section=$section;
    }
    public function message(){
        $this->hello();
    }
}

$dhrubo = new Student("Dhrubo", "13051", "C");
$dhrubo->message();
?>