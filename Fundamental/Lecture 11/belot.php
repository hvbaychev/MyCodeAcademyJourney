<?php

$number = ["2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A"];
$shape = ["hearts", "diamonds", "clubs", "spades"];

$allCards = [];

foreach ($shape as $shapes) {
    foreach ($number as $numbers) {
        if ($numbers == '2' || $numbers == '3' || $numbers == '4' || $numbers == '5' || $numbers == '6'){
            continue;
        }
        $card = $numbers . ' ' . $shapes;
        array_push($allCards, $card);
    }
}

echo "All cards before: ==> 32 ".PHP_EOL;
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
