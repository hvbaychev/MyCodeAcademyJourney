<?php

$myFile = fopen("writeFwrite.txt", "w");

$txt = "Hristo Baychev".PHP_EOL;
fwrite($myFile, $txt);

$txt = "Valentin Baychev".PHP_EOL;
fwrite($myFile, $txt);

fclose($myFile);


