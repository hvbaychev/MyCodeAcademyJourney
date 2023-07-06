<?php

$myFile = fopen("overwrite.txt", "a");

$txt = "Hristo Baychev \n";
fwrite($myFile, $txt);

$txt = "Valentin Baychev\n";
fwrite($myFile, $txt);

fclose($myFile);

