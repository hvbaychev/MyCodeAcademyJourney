<?php

$timezone = new DateTimeZone('Europe/Sofia');
$begin = new DateTime('First day of this month', $timezone);
//var_dump($begin);
$end = new DateTime('Last day of this month', $timezone);
//var_dump($end);

while ($begin <= $end){
    if ($begin->format('D') == 'Sat' || $begin -> format('D') == 'Sun'){
        $begin->modify('+1 day');
        continue;
    }
    else{
        echo $begin->format('jS. F. Y') . PHP_EOL;
        $begin->modify('+1 day');
        }
}