<?php

$myFile = fopen("sampleR.txt", "r");
echo fread($myFile, filesize("sampleR.txt"));
fclose($myFile);

// r - Отваря файл само за четене. Указателят във файла започва от началото на файла.