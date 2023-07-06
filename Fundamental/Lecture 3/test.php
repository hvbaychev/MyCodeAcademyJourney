<?php

$text = "TEXT";
$padding_length = 30;

$newtext = str_pad($text, $padding_length, " ", STR_PAD_BOTH);

echo "<p><center>$newtext</center></p>";