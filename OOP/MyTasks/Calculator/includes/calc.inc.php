<?php
declare(strict_types = 1);

require_once realpath("vendor/autoload.php");

$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];


$calc = new Calc($operator, (int)$num1, (int)$num2);

try {
    echo $calc->calculator();
} catch (TypeError $e) {
    echo "Error!" . $e->getMessage();
}