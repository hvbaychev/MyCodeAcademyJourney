<?php

$text = "TEXT";
$padding_length = 30;

$newText = str_pad($text, $padding_length, " ", STR_PAD_BOTH);

echo "<p><center>$newText</center></p>";