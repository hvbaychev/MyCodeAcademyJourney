<?php

function checkNumber1($num){
    $re = '/4[0-9]{2,}|[5-9][0-9]{2,}|[1-9][0-9]{3,}/';
    preg_match_all($re, $num, $matches, PREG_SET_ORDER, 0);
    // Print the entire match result
    var_dump($matches);
}

function checkNumber2($num) {
    checkNumber1($num);
}

checkNumber2(400);
