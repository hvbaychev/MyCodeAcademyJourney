<?php

/*
Проблем 1. Дефинирайте клас "Човек"
Дефинирайте клас "Човек" с полета за име и възраст.
Бележка
Добавете следния код и го изпратете на Judge.
$person = new Person();
echo(count(get_object_vars($person)));

Изходът на конзолата трябва да е 2. Ако сте дефинирали класа правилно, тестът трябва да мине.
Бонус*
Опитайте се да създадете няколко обекта от тип "Човек":
Име Възраст
Пешо 20
Гошо 18
Стамат 43
*/

class Person{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->name;
    }

}

$persons = [
$person = new Person("Pesho", 20),
$person1 = new Person("Goshko", 18),
$person2 = new Person("Stamat", 43)
];

var_dump($persons);
