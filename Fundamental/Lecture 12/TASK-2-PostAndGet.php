<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Simple form</title>
</head>
<body>
    <h1>Simple form</h1>
    <form method="post" action="?">   
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br>
        <label for="email">Mail:</label>
        <input type="email" name="email" id="email"><br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age"><br>
        <input type="submit" name="send" value="Send">
    </form>
    <?php
    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        echo "Name: " . $name . "<br>";
        echo "Mail: " . $email . "<br>";
        echo "Age: " . $age . "<br>";
    }
    ?>
</body>
</html>
