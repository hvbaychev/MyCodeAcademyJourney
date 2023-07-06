<?php

/*
Създайте набор от класове, които моделират различни видове превозни средства, като автомобили, камиони и мотоциклети.
Използвайте наследяване за да дефинирате родителски клас превозно средство с общи свойства и методи и след това създайте дъщерни класове
за всеки конкретен тип превозно средство, които наследяват от класа Vehicle i добавят свои собствени никални свойства и методи.

Изисквания:
1.Класът Vehicle трябва да има prooerties за марка, модел, година и цвят, както и методи за получавайе и настройка за всяко от тях.

2.Всеки дъщерен клас трябва да има свои собствени уникални свойства и методи, които са специжични за този тип превозно средство.
Нпаример класът кар може да има свойства за брой врати и капацитет на багажника, 
докато класът мотор може да има свойства за брой колела и размер на двигателя.

3. Всеки дъщерен клас трябва да наследява атрибутите и методите на на класа Vehicle и трябва да може да осъществява 
достъп до тях и да ги модифицира с помощта на подходящите модификатори за достъп. - ОК

4. Създайте поне едно копие на всеки дъщерен клас и демонстрирайте как може да се използва за достъп до свойства
и методите както на дъщерния така и на родителксия клас. - ok

5. Дефинирайте константи във финал клас, които да бъдат марките превозни средства. Потърсете сами как се създава такъв enum class - ok


Създаване на класове:
1. Vehicle - основен - ok
2. car - ok 
3. Truck - ok 
4. Motocykle - ok 

какво трябва да има един автомобил като основа:
Марка : brand - ok 
Година : yearofmade - ok 
Модел : model - ok 
Цвят : color - ok

дъщерни класове- кола
1. брой врати - ok
2. двигател - ok 
3. капацитет багажник - ok 
камион -
1. брой врати - ok 
2. двигател - ok 
3. ремарке - ok
морор - 
1. двигател - ok 
2. брой колела - ok 
3. литри резервоар - ok


*/

 enum CarBrand{
    const BMW = "BMW"; 
    const AUDI = "AUDI";
    const SIMSON = "SIMSON";
 }


 class Vehicle{
    protected $brand;
    protected $year;
    protected $model;
    protected $color;

    public function __construct(string $brand, int $year, string $model, string $color)
    {
        $this->brand = $brand;
        $this->year = $year;
        $this->model = $model;
        $this->color = $color;
    }

    public function getBrand(){
        return $this->brand;
    }
    public function getYear(){
        return $this->year;
    }
    public function getModel(){
        return $this->model;
    }
    public function getColor(){
        return $this->color;
    }

    public function setBrand($brand){
        $this->brand = $brand;
    }
    public function setYear($year){
        $this->year = $year;
    }
    public function setModel($model){
        $this->model = $model;
    }
    public function setColor($color){
        $this->color = $color;
    }

 }

 class Car extends Vehicle{
    private $carDoors;
    private $carEngine;
    private $carCapacity;

    public function __construct(string $brand, int $year, string $model, string $color, int $carDoors, float $carEngine, int $carCapacity){
        parent::__construct($brand, $year, $model, $color);
        $this->carDoors = $carDoors;
        $this->carEngine = $carEngine;
        $this->carCapacity = $carCapacity;
    }
    public function getCarDoors(){
        return $this->carDoors;
    }
    public function getCarEngine(){
        return $this->carEngine;
    }
    public function getCarCapacity(){
        return $this->CarCapacity;
    }

    public function setCarDoors($carDoors){
        $this->carDoors = $carDoors;
    }
    public function setCarEngine($carEngine){
        $this->carEngine = $carEngine;
    }
    public function setCarCapacity($carCapacity){
        $this->CarCapacity = $carCapacity;
    }

 }

 class Truck extends Vehicle{
    private $truckDoor;
    private $truckEngine;
    private $truckTrailer;

    public function __construct(string $brand, int $year, string $model, string $color, int $truckDoor, float $truckEngine, int $truckTrailer){
        parent::__construct($brand, $year, $model, $color);
        $this->truckDoor = $truckDoor;
        $this->truckEngine = $truckEngine;
        $this->truckTrailer = $truckTrailer;
    }

    public function getTruckDoor(){
        return $this->truckDoor;
    }
    public function getTruckEngine(){
        return $this->truckEngine;
    }
    public function getTruckTrailer(){
        return $this->truckTrailer;
    }

    public function setTruckDoor($truckDoor){
        $this->truckDoor = $truckDoor;
    }
    public function setTruckEngine($truckEngine){
        $this->truckEngine = $truckEngine;
    }
    public function setTruckTrailer($truckTrailer){
        $this->truckTrailer = $truckTrailer;
    }

 }

 class Motocykle extends Vehicle{
    private $motEngine;
    private $motTyre;
    private $motTank;
    public function __construct(string $brand, int $year, string $model, string $color, $motEngine, $motTyre, $motTank){
        parent::__construct($brand, $year, $model, $color);
        $this->motEngine = $motEngine;
        $this->motTyre = $motTyre;
        $this->motTank = $motTank;
    }

    public function getMotEngine(){
        return $this->motEngine;
    }
    public function getMotTyre(){
        return $this->motTyre;
    }
    public function getMotTank(){
        return $this->motTank;
    }

    public function setMotEngine($motEngine){
        $this->motEngine = $motEngine;
    }
    public function setMotTyre($motTyre){
        $this->motTyre = $motTyre;
    }
    public function setMotTank($motTank){
        $this->motTank = $motTank;
    }

 }


$car = new Car(CarBrand::BMW, 2022, 'M5', 'Red', 2, 5.0, 4);

echo "Brand car is: " . $car->getBrand().PHP_EOL; 
echo "Car model is: " . $car->getModel().PHP_EOL; 
echo "Car door is: " . $car->getCarDoors().PHP_EOL; 
echo "Car engine is: " . $car->getCarEngine().PHP_EOL;
echo "Car color is: " . $car->getColor().PHP_EOL;

$car->setColor('Blue').PHP_EOL; 
$car->setCarCapacity(2).PHP_EOL; 
echo "New color car is: " . $car->getColor().PHP_EOL;
echo "New car capacity is: " . $car->getCarCapacity().PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

/*--------------------------------------------------------------------------------------------*/

$truck = new Truck(CarBrand::AUDI, 2020, 'FH16', 'White', 2, 13.0, 3);

echo "Truck brand is: " . $truck->getBrand().PHP_EOL; 
echo "Trucl trailer is: " . $truck->getTruckTrailer().PHP_EOL; 
echo "Truck engine is: " . $truck->getTruckEngine().PHP_EOL;
echo "Truck color is: " .  $truck->getColor().PHP_EOL;

$truck->setYear(2021).PHP_EOL; 
$truck->setTruckDoor(3).PHP_EOL;
echo "New truck year is: " . $truck->getYear().PHP_EOL;
echo "New truck door is: " . $truck->getTruckDoor().PHP_EOL;
echo PHP_EOL;
echo PHP_EOL; 
/*--------------------------------------------------------------------------------------------*/

$moto = new Motocykle(CarBrand::SIMSON, 2023, 'CBR1000RR', 'Black', 1000, 17, 18);

echo "Motor Brand is: " . $moto->getBrand().PHP_EOL;  
echo "Motor engine is: " . $moto->getMotEngine().PHP_EOL; 
echo "Motor tank capacity is: " . $moto->getMotTank().PHP_EOL;

$moto->setMotEngine(750).PHP_EOL; 
$moto->setMotTyre(18).PHP_EOL; 
echo "New motor engine is: " . $moto->getMotEngine().PHP_EOL;
echo "New motor tyre is: " . $moto->getMotTyre().PHP_EOL;
/*--------------------------------------------------------------------------------------------*/

