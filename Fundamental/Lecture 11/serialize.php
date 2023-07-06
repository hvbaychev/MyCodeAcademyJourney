<?php

//$myArr = ["Apple" => "25", "Banana" => "35", "Pineapple" => "20", "Coconut" => "19", "Kiwi" => "25"];
$myArr = ["Apple" => 25, "Banana" => 35, "Pineapple" => 20, "Coconut" => 19, "Kiwi" => 25];

print_r($myArr);


$serializeArr = serialize($myArr);

print_r($serializeArr);  // a:5:{s:5:"Apple";i:25;s:6:"Banana";i:35;s:9:"Pineapple";i:20;s:7:"Coconut";i:19;s:4:"Kiwi";i:25;}