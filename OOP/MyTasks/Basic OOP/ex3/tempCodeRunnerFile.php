<?php

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
        $this->age = intval($age);
    }

}

$arrPerson = [];

// четене на N реда от конзолата
$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $input = trim(fgets(STDIN));
    list($name, $age) = explode(" ", $input);
    $person = new Person($name, $age);
    $arrPerson[] = $person;
}

// филтриране на обектите Person, чиято възраст е над 30 години
$arrPersonFiltered = array_filter($arrPerson, function($person) {
    return $person->getAge() > 30;
});

// сортиране на масива с обекти Person по име в азбучен ред
usort($arrPersonFiltered, function($a, $b) {
    return strcmp($a->getName(), $b->getName());
});

// извеждане на информацията за обектите Person
foreach ($arrPersonFiltered as $person) {
    echo $person->getName() . " " . $person->getAge() . PHP_EOL;
}