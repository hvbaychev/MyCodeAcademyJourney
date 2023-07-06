<?php




$names = ['gosho', 'pesho', 'petar', 'georgi', 'ivan'];   // array

$filterName = array_filter( // new var $filterName  to collect the new array  // array_filter - check for smth in array if is exist = true
    $names,
    function ($name) {   // function name
        return $name[0] === 'p'; // take the first element of string
      }  
    );                  

var_dump($filterName);  // print all names with first letter P

// this is anonymous function .. is called only 1 time and not necessary to have a name ... thats mean anonymous function