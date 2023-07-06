<?php

class Radio {
    private $volume = 50;

    public function volumeUp() {
        $this->volume += 10;
        echo "Volume up: " . $this->volume . PHP_EOL;
    }

    public function volumeDown() {
        $this->volume -= 10;
        echo "Volume down: " . $this->volume . PHP_EOL;
    }

    public function tune($frequency) {
        echo "Tuning to frequency: " . $frequency . PHP_EOL;
    }
}

class Car {
    private $radio;

    public function __construct() {
        $this->radio = new Radio();
    }

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    public function radio() {
        return $this->radio;
    }
}

$car = new Car();
$car->radio()->volumeUp();
$car->radio()->tune(100.5);
$car->radio()->volumeDown();



