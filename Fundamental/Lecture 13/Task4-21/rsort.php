<?php

$arr = [3, -5, 1, -9, 10, -2, 8];
$neg = [];


for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i] < 0){
        $neg[] = $arr[$i];
        unset($arr[$i]);
    }
}

rsort($arr);

$comb2arr = array_merge($arr, $neg);
//rsort($comb2arr); 

print_r($comb2arr);