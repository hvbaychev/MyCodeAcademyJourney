<?php


$myFile = fopen("sampleFgetC.txt", "r");
while (!feof($myFile)){
    echo fgetc($myFile) . "<br>";
}
fclose($myFile);