<?php

$my_array = ["apple", "banana", "orange"];

foreach ($my_array as $key => $value) {
    echo $value.PHP_EOL;
    echo ("$key --> $value").PHP_EOL;
}



$my_array = array("apple", "banana", "orange");

foreach ($my_array as $index => $value) {
    echo "Index: " . $index . ", Value: " . $value .PHP_EOL;
}
