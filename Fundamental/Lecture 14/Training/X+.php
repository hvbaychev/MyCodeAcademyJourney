<?php


$file = fopen('sampleX+.txt', 'x+');
fwrite($file, "Hello, World!");
rewind($file);
$content = fread($file, filesize('sampleX+.txt'));
echo $content;
fclose($file);


// x+ - Създава нов файл за четене и писане. Връща грешка, ако файлът вече съществува.