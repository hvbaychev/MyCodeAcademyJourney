<?php


$file = fopen('sampleA+.txt', 'a+');
fwrite($file, "Hello, World Again!");
rewind($file);  // change position of pointer from begin
$content = fread($file, filesize('sampleA+.txt'));
fclose($file);


/* a+ - Отваря файл за четене и писане. Съществуващите данни във файла се запазват.
 Указателят във файла започва от края на файла. Ако файла не съществува, се създава нов файл.
 */