<?php

$A = false;
$B = true;
$shortCircuitAND = $A && print_r($B);
var_dump($shortCircuitAND);

$A = false;
$B = "Does not matter whatever else it is because A is false.\n";
$shortCircuitAND = $A && print_r($B);
var_dump($shortCircuitAND);

$A = true;
$B = "Wo-hoo! Printing B because A is not false anymore.\n";
$shortCircuitAND = $A && print_r($B); // hm? do 
var_dump($shortCircuitAND); // hm? do you know why whe have true here? 
							// `cause print_r($B) returned true also!
?>