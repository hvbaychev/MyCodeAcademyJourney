<?php
/*
Създайте анонимен клас, който имплементира
интерфейс и наследява абстрактен клас.
Опитайте да наследите друг анонимен клас
*/

abstract class Sum{
    abstract public function getValueA();
    public function printValueA(){
        echo $this->getValueA();
    }
}

abstract class Minus{
    abstract public function getValueB();
    public function printValueB(){
        echo 'Second abstract class';
    }
}


interface Sleeve{
    public function smth();
} 


$someObj = new class extends Sum implements Sleeve{
    public function getValueA(){
        return "Abstract class".PHP_EOL;
    }
    public function smth(){
        return "smth interface".PHP_EOL;
    }
    //use Minus;
};

$someObj->printValueA();
//$someObj->printValueB();  // Sum@anonymous cannot use Minus - it is not a trait in
echo $someObj->smth(); 
