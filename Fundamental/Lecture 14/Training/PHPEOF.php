<?php


$myFile = fopen("samplePHPEOF.txt", "r");
while (!feof($myFile)){
    echo fgets($myFile) . "<br>";
}
fclose($myFile);