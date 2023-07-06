<?php

/*
Създайте скрипт, който приема низ от датата (във формат  ГГГГ-ММ-ДД) и го преобразува в различен формат, зададен от потребителя. 
Позволете на потребителя да избира списък с опции за формат (например ММ/ДД/ГГГГ, ДД/ММ/ГГГГ, ГГГГ-ММ-ДД, ЧЧ:ММ:СС и т.н.)
и да използвате датата(), за да формирате съответно низа за дата. Как ще се направи това като command line script?
*/

$date = isset($argv[1]) ? $argv[1] : '';
$format = isset($argv[2]) ? $argv[2] : '';

if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
    echo "Invalid date format. Please use YYYY-MM-DD\n";
    exit(1);
}
$datetime = new DateTime($date);
$formattedDate = $datetime->format($format);
echo $formattedDate . "\n";

?>