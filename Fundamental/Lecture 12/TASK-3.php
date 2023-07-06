<!DOCTYPE html>
<html>
<head>
	<title>Server Information</title>
</head>
<body>

<h1>Server Information</h1>

<p>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></p>
<p>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
<p>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
<p>Request Method: <?php echo $_SERVER['REQUEST_METHOD']; ?></p>

</body>
</html>
