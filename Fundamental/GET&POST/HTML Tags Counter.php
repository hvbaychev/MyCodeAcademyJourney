<?php

/*
Write a PHP script HTMLTagsCounter.php which generates an HTML form like in the example below. 
It should contain a label, an input text field and a submit button. 
The user enters HTML tag in the input field. If the tag is valid,
 the script should print “Valid HTML tag!”, and if it is invalid – “Invalid HTML Tag!”. On the second line,
 there should be a score counter. For every valid tag entered,
  the score should increase by 1. Use pure PHP Solution without JavaScript.
*/

?>


<!DOCTYPE html>

<html>
    <body>
        <form method="post">
            Enter HTML tags:
            <input type="text" name = "text" value="text"></br>
            <input type="submit" name = "submit" value="submit"></br>
        </form>
    </body>
</html>


<?php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
  }

if (isset($_POST["submit"])){
    $count = 0;
    $validTags = array('html', 'head', 'body', 'p', 'div', 'a', 'img');
    if (in_array($_POST["text"], $validTags)) {
        echo "Valid HTML tag!";
        $_SESSION['count']++;
    } else {
        echo "Invalid HTML tag!";
        $_SESSION['count'] = 0;
        session_destroy();
    }
    echo "Score: " . $_SESSION['count'];
}