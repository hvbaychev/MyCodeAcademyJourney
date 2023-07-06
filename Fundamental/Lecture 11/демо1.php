<?php


$hand = "7 1  1 1 8 1 1 9";

$cards = explode(" ", $hand);

sort($cards);
$count = null;
for ($i = 0; $i < count($cards) - 2; $i++) {
    if (($cards[$i+2] - $cards[$i+1] == 1) && ($cards[$i+1] - $cards[$i] == 1)) {
        echo "Three consecutive cards found!";
        break;
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
            if ($parts[$j] === "J") {
                $parts[$j] = 11;
            } elseif ($parts[$j] === "Q") {
                $parts[$j] = 12;
            } elseif ($parts[$j] === "K") {
                $parts[$j] = 13;
            } elseif ($parts[$j] === "A") {
                $parts[$j] = 14;
            } elseif ($parts[$j] === "10") {
                $parts[$j] = 10;
            } else {
                $parts[$j] = intval($parts[$j]);
            }
        }
        sort($parts);
        if (($parts[3] - $parts[2] == 1) && ($parts[2] - $parts[1] == 1) && ($parts[1] - $parts[0] == 1)) {
            return true;
        }
    }
    return false;
}
