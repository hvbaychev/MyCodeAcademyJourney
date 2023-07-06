<?php

$chrysanthemums = intval(readline());
$rose = intval(readline());
$tulips = intval(readline());
$season = readline();
$is_holiday = readline();

$bouquetPrice = 0;
$finalPrice = 0;
$totalFlowers = 0;
$arrangement = 2;

if ($season === "Summer" || $season === "Spring"){
    if ($is_holiday === "Y"){
        $chrysanthemumsPrice = 2 * 1.15;
        $rosePrice = 4.10 * 1.15;
        $tulipsPrice = 2.50 * 1.15;
    }else {
        $chrysanthemumsPrice = 2;
        $rosePrice = 4.10;
        $tulipsPrice = 2.50;
    }
}elseif ($season === "Winter" || $season === "Autumn") {
    if ($is_holiday === "Y"){
        $chrysanthemumsPrice = 3.75 * 1.15;
        $rosePrice = 4.50 * 1.15;
        $tulipsPrice = 4.15 * 1.15;
    }else {
        $chrysanthemumsPrice = 3.75;
        $rosePrice = 4.50;
        $tulipsPrice = 4.15; 
    }
}
$bouquetPrice = ($chrysanthemumsPrice * $chrysanthemums) + ($rosePrice * $rose) + ($tulipsPrice * $tulips); 
$totalFlowers = $chrysanthemums + $rose + $tulips;

if ($season === "Spring" && $tulips > 7){
    $bouquetPrice *= 0.95; 
}

if ($season === "Winter" && $rose >= 10){
    $bouquetPrice *= 0.90;
}

if ($totalFlowers > 20){
    $bouquetPrice *= 0.80;
}

$finalPrice = $arrangement + $bouquetPrice;
$format = number_format($finalPrice, 2, ',', ' ' );

echo $format;
