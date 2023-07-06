<?php
/*------------------------------------------------------------------------------
Създайте многоизмерен масив, който съдържа следната информация за любимите ви
филми: заглавие, режисьор, година и рейтинг. Използвайте цикъл, за да отпечатате
цялата информация за всеки филм в масива.1
--------------------------------------------------------------------------------*/


$movieArray = [
    ["Avatar", "James Cameron", 2009, 7.9],
    ["Dune", "Denis Villeneuve", 2021, 8.0],
    ["Recep Ivedik", "Togan Gökbakar", 2022, 5.3],
    ["The Northman", "Robert Eggers", 2022, 7.1]
];
//$len = count($movieArray);             --> this is for second option


foreach ($movieArray as $row) {   // first option ---> i like this more
    foreach ($row as $column){
        print $column . ' '.PHP_EOL;
    }
}


/*    
for ($row = 0; $row < $len; $row++) {        // second option
    echo "Row number: $row".PHP_EOL;
    for ($col = 0; $col < $len; $col++) {
      echo $movieArray[$row][$col].PHP_EOL;
    }
}
*/