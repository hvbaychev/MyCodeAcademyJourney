<?php

class Calculator {
    private static $result = 0;

    public static function add($num) {
        self::$result += $num;
    }

    public static function subtract($num) {
        self::$result -= $num;
    }

    public static function multiply($num) {
        self::$result *= $num;
    }

    public static function divide($num) {
        if ($num == 0) {
            return "Cannot divide by zero";
        } else {
            self::$result /= $num;
        }
    }

    public static function getResult() {
        return self::$result;
    }

    public static function clear() {
        self::$result = 0;
    }
}

Calculator::add(5);
Calculator::subtract(3);
Calculator::multiply(2);
Calculator::divide(4);

echo "Result: " . Calculator::getResult() . PHP_EOL;

Calculator::clear();
