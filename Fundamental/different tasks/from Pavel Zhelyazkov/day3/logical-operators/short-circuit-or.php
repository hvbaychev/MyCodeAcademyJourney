<?php

$A = true;
$B = false;
$shortCircuitAND = $A || print_r($B);
var_dump($shortCircuitAND);

$A = true;
$B = "Does not matter whatever else it is because A is true.\n";
$shortCircuitAND = $A || print_r($B);
var_dump($shortCircuitAND);

$A = false;
$B = "Wo-hoo! Printing B because A is not true anymore.\n";
$shortCircuitAND = $A || print_r($B); // hm? do 
var_dump($shortCircuitAND); // hm? do you know why whe have true here? 
							// `cause print_r($B) returned 1 also!
?>