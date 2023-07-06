<?php

$number = ["2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A"];
$shape = ["hearts", "diamonds", "clubs", "spades"];

$allCards = [];

foreach ($shape as $shapes) {
    foreach ($number as $numbers) {
        $card = $numbers . ' ' . $shapes;
        array_push($allCards, $card);
    }
}


echo "All cards before: ==> 52 " . PHP_EOL;
print_r($allCards);


unset($allCards[0],$allCards[1], $allCards[2], $allCards[3], $allCards[4], $allCards[13], $allCards[14], $allCards[15], $allCards[16], $allCards[17], $allCards[26], $allCards[27], $allCards[28], $allCards[29], $allCards[30], $allCards[39], $allCards[40], $allCards[41], $allCards[42], $allCards[43]);

$allCards = array_values($allCards);

shuffle($allCards);

echo "All cards after ==> 32 " . PHP_EOL;
print_r($allCards);


$players = [
    [], 
    [], 
    [], 
    []
];



for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 4; $j++){
        array_push($players[$j], array_pop($allCards));
    }
}

for ($i = 0; $i < 2; $i++){
    for ($j = 0; $j < 4; $j++){
        array_push($players[$j], array_pop($allCards));
    }
}

for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 4; $j++){
        array_push($players[$j], array_pop($allCards));
    }
}


echo "All cards after: ==> 0 ".PHP_EOL;
print_r($allCards);
echo "Player cards: ==> ".PHP_EOL;
print_r($players);

