<?php

$people = [['name' => 'Pesho', 'age' => 18], ['name' => 'Georgi', 'age' => 20], ['name' => 'Maria', 'age' => 19]];

usort($people, function($a, $b){
    $ageCompare = $a['age'] <=> $b['age'];
    if ($ageCompare === 0) {
        return $b['name'] <=> $a['name'];
    }
    return $ageCompare;
});

var_dump($people);