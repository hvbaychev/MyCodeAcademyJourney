<?php

function checkForTercet($cards) {
    $suits = array();
    foreach ($cards as $card) {
        $parts = explode(" ", $card);
        $suit = $parts[1];
        if (!isset($suits[$suit])) {
            $suits[$suit] = array();
        }
        $suits[$suit][] = $card;
    }

    foreach ($suits as $suitCards) {
        sort($suitCards);
        $count = count($suitCards);
        if ($count < 3){
            continue;
        }
        for ($i = 0; $i < 1; $i++) {
            $card1 = isset($suitCards[$i]) ? $suitCards[$i] : null;
            $card2 = isset($suitCards[$i+1]) ? $suitCards[$i+1] : null;
            $card3 = isset($suitCards[$i+2]) ? $suitCards[$i+2] : null;
            $card4 = isset($suitCards[$i+3]) ? $suitCards[$i+3] : null;
            $card5 = isset($suitCards[$i+4]) ? $suitCards[$i+4] : null;
            $card6 = isset($suitCards[$i+5]) ? $suitCards[$i+5] : null;
            $card7 = isset($suitCards[$i+6]) ? $suitCards[$i+6] : null;
            $card8 = isset($suitCards[$i+7]) ? $suitCards[$i+6] : null;
            $parts = array();
            for ($j = 1; $j <= 8; $j++) {
                $card = ${"card" . $j};
                $parts[$j-1] = $card ? explode(" ", $card)[0] : null;
            }
            for ($x = 0; $x < count($parts); $x++) {
                if ($parts[$x] === "J" || $parts[$x] === "Q" || $parts[$x] === "K" || $parts[$x] === "A" || $parts[$x] === "10") {
                    switch ($parts[$x]) {
                        case "J":
                            $parts[$x] = 11;
                            break;
                        case "Q":
                            $parts[$x] = 12;
                            break;
                        case "K":
                            $parts[$x] = 13;
                            break;
                        case "A":
                            $parts[$x] = 14;
                            break;
                        case "10":
                            $parts[$x] = 10;
                            break;
                    }
                } else {
                    $parts[$x] = intval($parts[$x]);
                }
    }

            sort($parts);
            for ($i = 0; $i < count($parts) - 2; $i++) {
                if ($parts[$i+1] == $parts[$i]+1 
                    && $parts[$i+2] == $parts[$i]+2) {
                return true;
            }
        }
    }
    return false;
}
}




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

$cardForBelot = [];
foreach ($allCards as $card) {
    $card_parts = explode(" ", $card);
    $number = $card_parts[0];
    if ($number == '2' || $number == '3' || $number == '4' || $number == '5' || $number == '6'){
        continue;
    }
    array_push($cardForBelot, $card);
}

echo "All cards after ==> 32" . PHP_EOL;
print_r($cardForBelot);

shuffle($cardForBelot);

echo "Shuffle cards: ==>";
print_r($cardForBelot);

$players = [
    "Player One" => [], 
    "Player Two" => [], 
    "Player Three" => [], 
    "Player Four" => []
];

for ($i = 0; $i < 3; $i++) {
    foreach ($players as $name => $cardForRemove) {
        array_push($players[$name], array_pop($cardForBelot));
    }
}

for ($i = 0; $i < 2; $i++) {
    foreach ($players as $name => $cardForRemove) {
        array_push($players[$name], array_pop($cardForBelot));
    }
}

for ($i = 0; $i < 3; $i++) {
    foreach ($players as $name => $cardForRemove) {
        array_push($players[$name], array_pop($cardForBelot));
    }
}

echo "All cards after: ==> 0 " . PHP_EOL;
print_r($cardForBelot);

echo "Player cards: ==> " . PHP_EOL;
foreach ($players as $nameOfPlayer => $cards) {
    echo $nameOfPlayer . " ==>> ";
    print_r($cards);
}

if (checkForTercet($cards)) {
    echo "tercet!\n";
} else {
    echo "\n";
}

