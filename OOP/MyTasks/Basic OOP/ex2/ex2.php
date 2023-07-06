<?php
require_once "index.php";

/*
Той трябва да приема низ за името и цяло число за възрастта и да създава човек с даденото име и възраст.
Добавете следния код към главния метод и го изпратете на Judge.
public function __construct(string $name, int $age) {
$this->name = $name;
$this->age = $age;
echo $this->name . " " . $this->age;
}
Ако сте дефинирали конструкторите правилно, тестът трябва да мине.
Входът се дава на два реда. На първия ред ще получите името. На втория ред ще получите възрастта.
Изходът трябва да бъде отпечатан на конзолата като един ред - име и възраст, разделени с един интервал.
*/

class Person{
    private $name;
    private $age;

    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }
}

