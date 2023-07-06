<?php

require_once 'ex2.php';


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Name and Age</title>
</head>
<body>
    <form method='GET'>
    <input type="text" name = "name" value = "name"/></br>
    <input type="number" name = "age"/></br>
    <input type="submit" name="submit" value="submit">
    </form>

    <?php
if (isset($_GET["submit"])) {
    $name = $_GET["name"];
    $age = $_GET["age"];
    $person = new Person($name, $age);
}
?>
<p>Name: <?php echo $person->getName(); ?></p>
<p>Age: <?php echo $person->getAge(); ?></p>
</body>
</html>