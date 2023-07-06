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
        for ($i = 0; $i < $count - 2; $i++) {
            $parts = array();
            for ($j = 0; $j < 3; $j++) {
                $card = $suitCards[$i + $j];
                $parts[$j] = explode(" ", $card)[0];
            }
            for ($j = 0; $j < count($parts); $j++) {
                $parts[$j] = in_array($parts[$j], ["J", "Q", "K", "A"]) ? 
                    ($parts[$j] === "J" ? 11 : ($parts[$j] === "Q" ? 12 : ($parts[$j] === "K" ? 13 : 14))) : intval($parts[$j]);
            }
            }
            sort($parts);
            for ($i = 0; $i < count($parts) - 2; $i++) {
                if (($parts[$i+2] - $parts[$i+1] == 1) && ($parts[$i+1] - $parts[$i] == 1)) {
                return true;
            }
        }
    }
    return false;
    }



function quarter($cards) {
    $suits = array();
    if (is_string($cards)) {
        $cards = explode(",", $cards);
    }
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
        for ($i = 0; $i < $count - 2; $i++) {
            $parts = array();
            for ($j = 0; $j < 3; $j++) {
                $card = $suitCards[$i + $j];
                $parts[$j] = explode(" ", $card)[0];
            }
            for ($j = 0; $j < count($parts); $j++) {
                $parts[$j] = in_array($parts[$j], ["J", "Q", "K", "A"]) ? 
                    ($parts[$j] === "J" ? 11 : ($parts[$j] === "Q" ? 12 : ($parts[$j] === "K" ? 13 : 14))) : intval($parts[$j]);
            }
            sort($parts);
            for ($i = 0; $i < count($cards) - 3; $i++) {
                if (($cards[$i+3] - $cards[$i+2] == 1) && 
                    ($cards[$i+2] - $cards[$i+1] == 1) &&
                    ($cards[$i+1] - $cards[$i] == 1)) 
                { 
                return true;
            }
        }
    }
    return false;
    }
}

function quinta($cards) {
    $suits = array();
    if (is_string($cards)) {
        $cards = explode(",", $cards);
    }
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
        for ($i = 0; $i < $count - 2; $i++) {
            $parts = array();
            for ($j = 0; $j < 3; $j++) {
                $card = $suitCards[$i + $j];
                $parts[$j] = explode(" ", $card)[0];
            }
            for ($j = 0; $j < count($parts); $j++) {
                $parts[$j] = in_array($parts[$j], ["J", "Q", "K", "A"]) ? 
                    ($parts[$j] === "J" ? 11 : ($parts[$j] === "Q" ? 12 : ($parts[$j] === "K" ? 13 : 14))) : intval($parts[$j]);
            }
            sort($parts);
            for ($i = 0; $i < count($cards) - 4; $i++) {
                if (($cards[$i+4] - $cards[$i+3] == 1) && 
                    ($cards[$i+3] - $cards[$i+2] == 1) && 
                    ($cards[$i+2] - $cards[$i+1] == 1) &&
                    ($cards[$i+1] - $cards[$i] == 1)) 
                { 
                return true;
            }
        }
    }
    return false;
    }
}

function hasFourOfAKind($cards) {
    $sameCards = array();
    if (is_string($cards)) {
        $cards = explode(",", $cards);
    }
    foreach ($cards as $card) {
        $parts = explode(" ", $card);
        $sameCard = $parts[0];
        if (!isset($sameCards[$sameCard])) {
            $sameCards[$sameCard] = array();
        }
        $sameCards[$sameCard][] = $card;
    }
    foreach ($sameCards as $sameCard) {
        $count = count($sameCard);
        if ($count >= 4) {
            return true;
        }
    }
    sort($cards);
    for ($i = 0; $i < count($cards) - 3; $i++) {
        $parts = array();
        for ($j = 0; $j < 4; $j++) {
            $card = $cards[$i + $j];
            $parts[$j] = explode(" ", $card)[0];
            for ($j = 0; $j < count($parts); $j++) {
                $parts[$j] = in_array($parts[$j], ["J", "Q", "K", "A"]) ? 
                    ($parts[$j] === "J" ? 11 : ($parts[$j] === "Q" ? 12 : ($parts[$j] === "K" ? 13 : 14))) : intval($parts[$j]);
            }
        sort($parts);
        if (($parts[3] - $parts[2] == 1) && ($parts[2] - $parts[1] == 1) && ($parts[1] - $parts[0] == 1)) {
            return true;
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

if (quarter($card)){
    echo "quarter!\n";
}
else{
    echo "\n";
}


if (quinta($card)){
    echo "quinta!\n";
}
else{
    echo "\n";
}
