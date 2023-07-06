<?php

/*
Създайте клас, наречен "Person" с private атрибути за име, възраст и имейл адрес.
Добавете публични методи за получаване и задаване за всяко свойство, така че да могат
да бъдат достъпни и модифицирани извън класа.
*/

class Person{
    private $name;
    private $age;
    private $email;
 

    public function __construct(string $name, int $age, mixed $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getEmail(){
        return $this->email;
    }


    public function __toString(){
        return "Name: " . $this->name . ", Age: " . $this->age . ", Email: " . $this->email;
    }
    
}   


$person = new Person("Petar", 20, "smth@abv.bg");
echo $person;

