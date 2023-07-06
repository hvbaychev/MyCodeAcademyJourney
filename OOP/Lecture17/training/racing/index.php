<?php
declare(strict_types=1);
require_once 'carRacing.php';

$pilots = [];
$count = 0;
while (count($pilots) < 2){
    if (isset($_GET["start"])) {
        $racerName = $_GET["racer_one"];
        if (in_array($racerName, array_column($pilots, 'pilot'))) {
            $racerName.= strval(++$count);
        }
        $newRacer = new carRacing($racerName, $_GET["model_car"], (int)$_GET["speed"], (int)$_GET["box_time"]);
        array_push($pilots, $newRacer);
    }
    var_dump($pilots);
}
?>
<!DOCTYPE html>
<html>
    <form>
        Name racer:<input type="text" name="racer_one" /></br>
        Car racer:<input type="text" name="model_car" /></br>
        Speed racer:<input type="number" name="speed" /></br>
        Time in box:<input type="number" name="box_time" /></br>
        <input type="submit" name="start" value="start racing" />
    </form>
</html>
