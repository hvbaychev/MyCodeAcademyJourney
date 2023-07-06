<?php
/*
Write a PHP script PrintTags.php which generates an HTML input text field and a submit button.
In the text field the user must enter different tags, separated by a comma and a space (", ").
Output should be in ordered list by the order of appearance in the input.
Semantic HTML is required. Styling is not required.
*/
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Print Tags</title>
</head>
<body>
    <form method="get">
        Enter Tags: <br>
        <input type="text" name="tags" value=""><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET["submit"])) {
        $tags = $_GET["tags"];
        $tagArray = explode(", ", $tags);
        echo "<ol>";
        foreach ($tagArray as $tag) {
            echo "<li>" . $tag . "</li>";
        }
        echo "</ol>";
    }
    ?>
</body>
</html>
