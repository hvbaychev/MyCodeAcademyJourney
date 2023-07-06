<?php

abstract class One {
    abstract protected function oneA();
}

abstract class Two extends One {
    abstract protected function twoB();
}

class someClass extends Two {
    protected function oneA() {
        echo "Implementation of oneA in someClass".PHP_EOL;
    }

    protected function twoB() {
        echo "Implementation of twoB in someClass".PHP_EOL;
    }

    public function callOneA() {
        $this->oneA();
    }
    public function callOneB(){
        $this->twoB();
    }
}

$object = new someClass();
$object->callOneA();
$object->callOneB();

