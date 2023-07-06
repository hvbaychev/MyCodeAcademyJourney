<?php

$data1 = date_create('1987-08-22');
$data2 = date_create('2023-04-04');

$day_diff = date_diff($data1 , $data2);

print_r($day_diff);