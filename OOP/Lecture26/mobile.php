<!DOCTYPE html>
<html>
<head>
    <title>Mobile Device Detection Example</title>
</head>
<body>
    <h1>Welcome to our website!</h1>
    <?php
    require_once('MobileDeviceFactory.php');

    $factory = new MobileDeviceFactory();

    $device = $factory->createDevice();

    switch ($device) {
        case 'iOS':
            echo "<p>This is an iOS device.</p>";
            break;
        case 'Android':
            echo "<p>This is an Android device.</p>";
            break;
        case 'Windows':
            echo "<p>This is a Windows device.</p>";
            break;
        default:
            echo "<p>Unknown device.</p>";
            break;
    }
    ?>
</body>
</html>
