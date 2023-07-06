<?php

$money = intval(readline());
$season = readline();
$type_mobile = NULL;
$model_mobile = NULL;
$price = 0;

if ($money <= 100) {
    $type_mobile = "Economy class";
    if ($season === "Summer"){
        $model_mobile = "Cabrio";
        $price = $money * 0.35;
    }
    elseif ($season === "Winter") {
        $model_mobile = "Jeep";
        $price = $money * 0.65;
    }
}

if ($money > 100 && $money <= 500){
    $type_mobile = "Compact class";
    if ($season === "Summer"){
        $model_mobile = "Cabrio";
        $price = $money * 0.45;
    }
    elseif ($season === "Winter") {
        $model_mobile = "Jeep";
        $price = $money * 0.80;
    }
}
if ($money > 500){
    $type_mobile = "Luxury class";
    $model_mobile = 'Jeep';
    $price = $money * 0.90;
}

$format = number_format($price, 2, '.', '');

echo $type_mobile;
echo "{$model_mobile} - {$format}";