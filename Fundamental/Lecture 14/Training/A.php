<?php

$file = fopen('sampleA.txt', 'a');
fwrite($file, "Hello, World Again!");
fclose($file);


// a - Отваря файл само за писане. Съществуващите данни във файла се запазват. Указателят
// във файла започва от края на файла. Ако файла не съществува, се създава нов файл.