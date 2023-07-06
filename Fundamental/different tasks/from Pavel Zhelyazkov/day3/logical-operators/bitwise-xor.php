<?php

$a = 0b1010;
$b = 0b0011;

echo "Before:\n";
printf("\$a = 0b%04b\n", $a);
printf("\$b = 0b%04b\n", $b);

$a = $a ^ $b; // $a = 0b1001;
$b = $a ^ $b; // $b = 0b1010;
$a = $a ^ $b; // $a = 0b0011;

echo "After:\n";
printf("\$a = 0b%04b\n", $a);
printf("\$b = 0b%04b\n", $b);

?>