<?php

declare(strict_types=1);

function filterNameP($name) {   // function name
    if ($name[0] === 'p'){  // take the first element of string
        return true;  // if is exist - true
    }
    return false; // if is not exist = false
}


$names = ['gosho', 'pesho', 'petar', 'georgi', 'ivan'];   // array

$filterName = array_filter( // new var $filterName  to collect the new array  // array_filter - check for smth in array if is exist = true
    $names,
    'filterNameP'    // this is a function-name like a string ... this can be function // this means is reference or delegate(on functional programing)
);                   

var_dump($filterName);  // print all names with first letter P



