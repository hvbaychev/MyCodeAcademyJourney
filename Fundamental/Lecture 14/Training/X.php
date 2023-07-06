<?php


$file = fopen('sampleX.txt', 'x');

fwrite($file, "Hello, World!");

fclose($file);

// x - Създава нов файл само за писане. Връща грешка, ако файлът вече съществува.