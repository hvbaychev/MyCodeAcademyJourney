<?php

$dateFirst = date_create("2023-12-24");
$dateSecond = date_create("2023-12-25");
$dateThird = date_create("2023-01-01");
//var_dump($dateFirst);

$arr = [$dateFirst, $dateSecond, $dateThird];
sort($arr);

print_r($arr);
