<?php

$users = array(
    'user1' => 'pass1',
    'user2' => 'pass2',
    'user3' => 'pass3'
);

session_start();


if (isset($_SESSION['username'])) {
    echo "Hello, " . $_SESSION['username'] . "!<br>";
    echo '<a href="logout.php">EXIT</a>';
    session_unset();
    //session_destroy();
    exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        $session_id = session_id();
        setcookie('session_id', $session_id, 0, '/', '', true, true);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Wrong username or password.<br>";
    }
}

echo '<form method="POST">';
echo 'Username: <input type="text" name="username"><br>';
echo 'Password: <input type="password" name="password"><br>';
echo '<input type="submit" value="LogIn">';
echo '</form>';

?>
