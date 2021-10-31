<?php

class Person
{
    public $name;
    public $age;
    public $gender;

    function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    function __destruct()
    {
        echo "{$this->name} is {$this->gender} and {$this->age} years old";
    }
}

$dhrubo = new Person("Dhrubo", "Male", "23");
