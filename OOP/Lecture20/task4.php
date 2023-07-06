<?php

/*
Създайте клас, наречен "BankAccount" с private атрибути за номер на сметка, баланс и
лихвен процент. Добавете публични методи за депозиране и теглене на пари от сметката
и private метод за изчисляване на лихвата въз основа на текущия баланс и лихвен
процент. Комбинирайте с клас Person и Calculator :)
*/


class Person{
    protected $name;
    protected $age;
    protected $email;
 

    public function __construct(string $name, int $age, string $email)
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
}   




class InfoBankAccount extends Person{
    private $numberAcc;
    
    private $deposit;
    private $balance = 0;
    private $withdrawal;
    private $monthDeposit;

    private $interestRate;
    private $interestCalculation;

    public function __construct(string $name, int $age, string $email, float $deposit, float $withdrawal, float $interestRate, int $monthDeposit){
        parent::__construct($name, $age, $email);
        $this->deposit = $deposit;
        $this->withdrawal = $withdrawal;
        $this->interestRate = $interestRate;
        $this->monthDeposit = $monthDeposit;


    }

    public function BankAcc(){
        return $this->numberAcc = uniqid();
    }


    public function setDeposit($deposit){
        $this->deposit = $deposit;
    }
    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }
    public function setMonthDeposit($monthDeposit){
        $this->monthDeposit = $monthDeposit;
    }
    public function setWithdrawal($withdrawal){
        $this->withdrawal = $withdrawal;
    }



    public function getDeposit(){
        if ($this->deposit <= 0){
            throw new Exception("Your deposit can`t be 0");
        }
        else{
            return $this->deposit;
        }
    }
    public function getInterestRate(){
        return $this->interestRate * 100;
    }
    public function getMonthDeposit(){
        return $this->monthDeposit;
    }
    public function getWithdrawal(){
        return $this->withdrawal;
    }



    public function balance(){
        $this->balance = $this->deposit + $this->balance;
        return $this->balance;

    }

    public function interestCalculation(){
        $interest = $this->balance * ($this->interestRate / 12) * $this->monthDeposit;
        return $interest;

    }

    public function calcWithdrawal(){
        if ($this->balance > $this->withdrawal){
        $this->balance = $this->balance - $this->withdrawal;
        return $this->balance;
        }
        else{
            throw new Exception("You don`t have enough money!");
        }
    }
    public function __toString(){
        return "Name: " . $this->name . ", Age: " . $this->age . ", Email: " . $this->email . ", Account number: " . $this->numberAcc . PHP_EOL;
    }
    
}

$persons = [
    new InfoBankAccount('Hristo', 35, 'hriston@gmail.com', 1000, 500, 0.02, 6),
    new InfoBankAccount('Petar', 25, 'petar@gmail.com', 100, 500, 0.02, 6),
    new InfoBankAccount('Kircho', 30, 'kircho@gmail.com', 0, 0, 0.02, 6),
    new InfoBankAccount('Rumen', 32, 'rumen@gmail.com', 20000, 10, 0.02, 6)
];

foreach ($persons as $person) {
    echo $person->getName() . ' has account number ' . $person->BankAcc() . ' with a balance of $' . $person->balance() . PHP_EOL;
    echo 'Interest rate: ' . $person->getInterestRate() . '%' . PHP_EOL;
    echo 'Interest earned after 6 months: $' . $person->interestCalculation() . PHP_EOL;
    try {
        echo "Your deposit is: " . $person->getDeposit().PHP_EOL;
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        continue;
    }
    try {
        echo 'After withdrawing $' . $person->getWithdrawal() . ', the new balance is $' . $person->calcWithdrawal() . PHP_EOL;
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        continue;
    }
}

