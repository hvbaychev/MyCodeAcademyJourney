<?php

class Person {
    private $name;
    private $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = intval($age);
    }
}

$person1 = new Person("Pesho", 12);
$person2 = new Person("Stamat", 31);
$person3 = new Person("Ivan", 43);

$arrPerson = [$person1, $person2, $person3];

$arrMoreThen30 = array_filter($arrPerson, function($person) {
    return $person->getAge() > 30;
});

usort($arrMoreThen30, function($a, $b) {
    return strcmp($a->getName(), $b->getName());
});

foreach ($arrMoreThen30 as $person) {
    echo $person->getName() . " " . $person->getAge() . PHP_EOL;
}
