<?php

class Calculator {
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        if ($num2 == 0) {
            return "Cannot divide by zero";
        } else {
            return $num1 / $num2;
        }
    }
}

$myCalculator = new Calculator();

echo "Addition: " . $myCalculator->add(5, 3) . PHP_EOL;
echo "Subtraction: " . $myCalculator->subtract(5, 3) . PHP_EOL;
echo "Multiplication: " . $myCalculator->multiply(5, 3) . PHP_EOL;
echo "Division: " . $myCalculator->divide(5, 3) . PHP_EOL;
echo "Division by zero: " . $myCalculator->divide(5, 0) . PHP_EOL;
