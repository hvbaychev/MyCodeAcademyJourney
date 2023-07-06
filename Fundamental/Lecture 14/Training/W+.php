<?php


$file = fopen('sampleW+.txt', 'w+');
fwrite($file, "Hello, World!");
rewind($file);
$content = fread($file, filesize('sampleW+.txt'));


// w+ - Отваря файл за четене и писане. Изтрива съдържанието на файла или създава нов файл, ако такъв не съществува. Указателят във файла започва от началото на файла.