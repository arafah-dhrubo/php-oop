<?php 
class Person{
    public $name = "Ariful Islam";
    public $age;

    public function personName(){
        echo "Person Name is: ".$this->name."<br/>";
    }

    public function personAge($value){
        echo $value;
        echo "Person Age is: ".$this->age=$value."<br/>";
    }
}

$student = new Person;
$student->name="Dhrubo";
$student->personName();
$student->personAge(23);
echo $student->age;
?>
