<?php

$names = ['gosho', 'pesho', 'petar', 'georgi', 'ivan'];

$filterLenNames = array_filter($names, function($name){
    return strlen($name) > 5;
});

var_dump ($filterLenNames);