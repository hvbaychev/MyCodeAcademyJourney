<?php

class carRacing{
    private static $lastId;
    private $id;

    private $pilot;
    private $car;
    private $speed;
    private $timeInBox;

    function __construct(string $pilot, string $car, int $speed, int $timeInBox){
        $this->pilot = $pilot;
        $this->car = $car;
        $this->speed = $speed;
        $this->timeInBox =  $timeInBox; 
    }

    public function getName():string{
        $this->pilot = $pilot;
    }

    public function getCar():string{
        $this->car = $car;
    }

    public function getSpeed():int{
        $this->speed = $speed;
    }

    public function getTimeInBox():int{
        $this->timeInBox = $timeInBox;
    }


}
