<?php

 class Calculator{
    public $firstNumber;
    public $secondNumber;

    public function sum(){
        echo "Summation = ".($this->firstNumber+$this->secondNumber);
    }
     public function sub(){
         echo "Subtraction = ".($this->firstNumber-$this->secondNumber);
     }
     public function mul(){
         echo "Multiplication = ".($this->firstNumber*$this->secondNumber);
     }
     public function div(){
         echo "Division = ".($this->firstNumber/$this->secondNumber);
     }
}
