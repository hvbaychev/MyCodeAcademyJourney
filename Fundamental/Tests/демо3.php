<?php

$file_path = 'C:\xampp\tmp\php3FCA.tmp => files/фитнес.txt';
$file_content = 'Hello, world!';

$file_handle = fopen($file_path, 'w');
if ($file_handle === false) {
    echo 'Failed to open file for writing';
} else {
    fwrite($file_handle, $file_content);
    fclose($file_handle);
    echo 'File written successfully';
}
