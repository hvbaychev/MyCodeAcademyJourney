<?php

$file = fopen('sampleR+.txt', 'r+');
$content = fread($file, filesize('sampleR+.txt'));
echo $content;
fwrite($file, "Hello, World Again!");
fclose($file);


// r+ - Отваря файл за четене и писане. Указателят във файла започва от началото на файла.
// Трябва да има нещо във файла иначе връща грешка