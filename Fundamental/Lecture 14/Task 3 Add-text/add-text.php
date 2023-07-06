<?php
if(isset($_POST['filename']) && isset($_POST['text'])) {
    
    $filename = $_POST['filename'];

   
    $file = fopen($filename, 'a');

   
    fwrite($file, $_POST['text']);  // safe text in file


    fclose($file);

    echo "Тext added successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD TEXT</title>
</head>
<body>
	<form method="POST">
		<label for="filename">File name:</label>
		<input type="text" id="filename" name="filename"><br><br>
		<input type="submit" value="Choice a file"><br><br>
	</form>

	<?php
	if(isset($_POST['filename'])) {
	?>
		<form method="POST">
			<label for="text">Text:</label>
			<textarea id="text" name="text" rows="4" cols="50"></textarea><br><br>
			<input type="hidden" name="filename" value="<?php echo $_POST['filename']; ?>">
			<input type="submit" value="Add text">
		</form>
	<?php
	}
	?>
</body>
</html>
