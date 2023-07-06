<?php

/*
Създайте клас, наречен “Calculator” с private property за текущата стойност и публични
методи за събиране, изваждане, умножение и деление. Използвайте private атрибута, за
да следите текущата стойност, и използвайте публични методи, за да го промените въз
основа на въвеждане от потребителя.
*/

class Calculator {
    private $currentSum;
    private $a;
    private $b;
    
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function setA($a) {
        $this->a = $a;
    }

    public function setB($b) {
        $this->b = $b;
    }

    public function getA() {
        return $this->a;
    }

    public function getB() {
        return $this->b;
    }

    public function getCurrentSum() {
        return $this->currentSum;
    }
    
    public function add() {
        $this->currentSum = $this->a + $this->b;
        return $this->currentSum;
    }

    public function subtraction() {
        $this->currentSum = $this->a - $this->b;
        return $this->currentSum;
    }

    public function multiplication() {
        $this->currentSum = $this->a * $this->b;
        return $this->currentSum;
    }

    public function division() {
        if ($this->b == 0) {
            throw new Exception("Cannot divide by 0!!!");
        }
        $this->currentSum = $this->a / $this->b;
        return $this->currentSum;
    }
}


$calculator = new Calculator(5, 2);


$sum = $calculator->add();
$minus = $calculator->subtraction();
$multi = $calculator->multiplication();
$division = $calculator->division(); 


echo "sum 5 + 2 is =>  " . $sum. PHP_EOL;
echo "Sub  5 - 2 is => " . $minus. PHP_EOL;
echo "Multiplication 5 * 2 is => " . $multi. PHP_EOL;
echo "Division  5 / 2 is => " . $division. PHP_EOL;
