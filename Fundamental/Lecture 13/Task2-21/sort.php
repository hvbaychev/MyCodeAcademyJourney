<?php


$array = array(
    array('name' => 'John', 'age' => 25),
    array('name' => 'Jane', 'age' => 20),
    array('name' => 'Bob', 'age' => 30)
);


$age = array();
foreach ($array as $key => $row) {
    $age[$key] = $row['age'];
}

array_multisort($age, SORT_ASC, $array);

print_r($array);
