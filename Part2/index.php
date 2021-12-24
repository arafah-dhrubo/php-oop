<!-- Including functions.php file. 
Otherwise server will not get access to Class and methods -->
<?php
include_once "functions.php"
?>

<!-- Form to take input -->
    <form method="POST">
        <label for="firstNumber">First Number</label><br>
        <input type="number" name="firstNumber" id="firstNumber" placeholder="First Number" required><br>
        <label for="secondNumber">Second Number</label><br>
        <input type="number" name="secondNumber" id="secondNumber" placeholder="Second Number" required><br>
        <label for="operation">Operation</label>
        <select name="operation" id="operation" required>
            <option value="sum">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

<!-- Business logic -->
<?php

$calculator = new Calculator(); //Creating object

// if request method is post then this block will be executed
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Assigning values into variables
    $operation = $_POST["operation"];
    $firstNumber = $_POST["firstNumber"];
    $secondNumber = $_POST["secondNumber"];

    // Assigning values in object's variable
    $calculator->firstNumber = $firstNumber;
    $calculator->secondNumber = $secondNumber;

    // Condition for arithmatic operations
    if ($operation == "sum") {
        $calculator->sum();
    } else if ($operation == "sub") {
        $calculator->sub();
    } else if ($operation == "mul") {
        $calculator->mul();
    } else {
        $calculator->div();
    }
}

?>