<?php

class fruit {
    public $name;
    public $color;
    
    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
}

$kiwi = new fruit();
$pineapple = new fruit();

$kiwi->setName("KIWI");
$pineapple->setName("PINEAPPLE");

echo $kiwi->getName().PHP_EOL;
echo $pineapple->getName();