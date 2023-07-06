<?php
/*
Създайте клас, наречен "Car" с protected атрибути за марка, модел и година. Добавете
публични методи за получаване на всеки атрибут, така че да могат да бъдат достъпни от
дъщерен клас, но не извън йерархията на класа.
*/

class Car{
    protected $brand;
    protected $model;
    protected $year;

    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function setBrand($brand){
        $this->brand = $brand;
    }
    public function setModel($model){
        $this->model = $model;
    }
    public function setYear($year){
        $this->year = $year;
    }

    public function getBrand(){
        return $this->brand;
    }
    public function getModel(){
        return $this->model;
    }
    public function getYear(){
        return $this->year;
    }
}

class Service extends Car{
    private $repair;
    private $price;

    public function __construct(string $brand, string $model, int $year, string $repair, float $price)
    {   
        parent::__construct($brand, $model, $year);
        $this->repair = $repair;
        $this->price = $price;
    }

    public function setRepair($repair){
        $this->repair = $repair;
    }
    public function setPrice($price){
        $this->price = $price;
    }

    public function getRepair(){
        return $this->repair;
    }
    public function getPrice(){
        return $this->price;
    }

    public function __toString(){
        return "Your car is: " . $this->getBrand() . "\n" . "Your model is: " . $this->getModel() . "\n" . "Year: " . $this->getYear() . "\n" . "Repair is: " . $this->getRepair() . "\n" . "Cost: " . $this->getPrice();
    }
}


$car = new Car("BMW", "X5", 2022);


$service = new Service("BMW", "X5", 2022, "Oil Change", 100.00);
echo $service;
