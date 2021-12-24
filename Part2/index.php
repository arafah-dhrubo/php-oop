<?php
include_once "functions.php"
?>

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


<?php
$calculator = new Calculator();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $operation = $_POST["operation"];
    $firstNumber = $_POST["firstNumber"];
    $secondNumber = $_POST["secondNumber"];

    $calculator->firstNumber = $firstNumber;
    $calculator->secondNumber = $secondNumber;

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