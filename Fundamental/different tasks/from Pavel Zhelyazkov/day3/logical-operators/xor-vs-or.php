<?php

$is_sunny_day = true;
$is_rainy_day = true;

echo '$is_sunny_day = '; var_dump($is_sunny_day);
echo '$is_rainy_day = '; var_dump($is_rainy_day);

echo "Using XOR: ";
if($is_sunny_day xor $is_rainy_day) {
	echo "It might be sunny or rainy today.";
} else {
	echo "Ambiguous weather indicators. Can't determine.";
}
echo "\n";

// ------------------------

echo "Using OR: ";
if($is_sunny_day or $is_rainy_day) {
	echo "It might be sunny or rainy today (or both).";	
} else {
	echo "No weather indicators. Can't determine.";
}
echo "\n";

?>