<?php

$myArr = [
        ["BMW 525" => 15000],
        ["AUDI A4 1.9TDI" => 1000],
        ["MERCEDES E220" => 2000],
        ["VW GOLF3" => 5000],
        ["LADA" => 6000],
];

foreach ($myArr as $product) {
    list($model, $price) = each($product);
    echo "Model: $model, Price: $price".PHP_EOL;
}



list($model, $price) = ["BMW 525",  15000];
echo $model.PHP_EOL;
echo $price;