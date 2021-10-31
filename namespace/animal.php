<?php

namespace Animals;

include_once "cat.php";
include_once "dog.php";

// use Animal\Cat;

$cat = new \Cat();
$cat->greet();

$dog=new \Dog();
$dog->greet();

new \DateTime();

?>