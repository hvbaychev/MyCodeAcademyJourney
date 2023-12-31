<?php

class Player {
    private static $lastId = 0;
    private $id;

    private $nickname;
    private $health;
    private $attack;
    
    public function __construct(string $nickname, int $health, int $attack) {
        $this->nickname = $nickname;
        $this->health = $health;
        $this->attack = $attack;
        $this->id = ++self::$lastId;
    }



    public function getAttack(): int {
        return $this->attack;
    }

    public function reduceHealth(int $health) {
        $this->health -= $health;
    }

    public function isAlive(): bool {
        return $this->health > 0;
    }

    public function __toString(): string {
        return $this->nickname;
    }
    public function setName($nickname){
        $this->nickname = $nickname;
    }
    public function setAttack($attack){
        $this->attack = $attack;
    }
    public function setHealth($health){
        $this->health = $health;
    }

    public function attack(Player $opponent) {
        if ($opponent === $this) {
            throw new Exception("Cannot attack yourself");
        }

        $opponent->reduceHealth($this->getAttack());
        echo "{$this} attack {$opponent}. {$opponent} remain with {$opponent->health} health." . PHP_EOL;
    }
}   

$players = [];
$playerNames = [
    "Aleksandar Shishkov",
    "Galina Nikolova",
    "Imran",
    "Ivan Panayotov",
    "Kiril Bardarov",
    "Martin",
    "Pavel Zhelyazkov",
    "Plamen Mitev",
    "Rumen",
    "Rusi Nedelchev",
    "Veselin",
    "Zahari",
    "Borislav",
    "IO"
];

foreach ($playerNames as $names) {
    $player = new Player($names,rand(500,1000),rand(10,30));
    // $player = new Player("traycho", 1, 2);
    // $player->setName($names);
    // $player->setAttack(rand(10,50));
    // $player->setHealth(rand(500,1000));
    array_push($players, $player);
    
}

/*
$player1 = new Player("Aleksandar Shishkov", rand(200,500), rand(10,30) );
$player2 = new Player("Galina Nikolova", rand(200,500), rand(10,30));
$player3 = new Player("Imran", rand(200,500), rand(10,30));
$player4 = new Player("Ivan Panayotov", rand(200,500), rand(10,30));
$player5 = new Player("Kiril Bardarov", rand(200,500), rand(10,30));
$player6 = new Player("Martin", rand(200,500), rand(10,30));
$player7 = new Player("Pavel Zhelyazkov", rand(200,500), rand(10,30));
$player8 = new Player("Plamen Mitev", rand(200,500), rand(10,30));
$player9 = new Player("Rumen", rand(200,500),rand(10,30));
$player10 = new Player("Rusi Nedelchev", rand(200,500), rand(10,30));
$player11 = new Player("Veselin", rand(200,500), rand(10,30));
$player12 = new Player("Zahari", rand(200,500), rand(10,30));
$player13 = new Player("Borislav", rand(200,500), rand(10,30));
$player14 = new Player("IO", rand(200,500), rand(10,30));

$players = [$player1, $player2, $player3, $player4, $player5, $player6, $player7, $player8, $player9, $player10, $player11, $player12, $player13, $player14];
*/

shuffle($players);

while (count($players) > 1) {
    $attacker = array_shift($players);
    $defenderKey = array_rand($players);
    $defender = $players[$defenderKey];
    if ($defender->isAlive()) {
        $attacker->attack($defender);
        if (!$defender->isAlive()) {
            echo "{$defender} is killed from {$attacker}." . PHP_EOL;
            unset($players[$defenderKey]);
        }
    } else {
        echo "{$defender} is dead from {$attacker}." . PHP_EOL;
    }
}

echo "{$players[0]} is a WINNER!!!!" . PHP_EOL;
