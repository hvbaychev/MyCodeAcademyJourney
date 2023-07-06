<?php

do {
    echo "Please enter the number: ";
    $number = readline();
    echo "Your number is: " . $number .PHP_EOL;
} while ($number < 0 && $number > 10);

echo "The number is valid!";
?>
