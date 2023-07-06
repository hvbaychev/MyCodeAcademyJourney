<?php

/*
създайте скрипт, който изчислява броя на дните между две дати, въведени от потребителя. Използвайте функцията strtotime(), за да преобразувате датите в UNIX timestampt.
и след това ги извадете, за да получите броя на секундите между датите. Накрая разделете броя на секундите в деня за да получите броя на дните
*/

if(isset($_GET["start"])){
    $dateOne = strtotime($_GET["first_date"]);
    $dateTwo = strtotime($_GET["second_date"]);
    $calculate = abs($dateTwo - $dateOne);
    $totalDays = floor($calculate / 86400); // 86400  - one day
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Input two different random days: </title>
    </head>
<body>
    <form method="get">
        First date: <input type="text" name="first_date"/><br/> value="<?php echo $_GET['first_date'] ?? ''; ?>" /><br/>
        Second date: <input type="text" name="second_date"/><br/> value="<?php echo $_GET['second_date'] ?? ''; ?>" /> <br/>
        <input type="submit" name="start" value="CALCULATE DATE">
    </form>
    
    <?php
        if(isset($_GET["start"]) && $totalDays){
            echo "<p>Total days: " . $totalDays . "</p>";
        }
    ?>
</body>
</html>
