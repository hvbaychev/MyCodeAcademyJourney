<?php
if(isset($_POST['filename']) && isset($_POST['text'])) {   // check name and text
    
    $filename = $_POST['filename'];  // name of file
    
    $text = $_POST['text'];  // text of file

    
    $file = fopen($filename, 'w');  // open file

 
    fwrite($file, $text);  // safe a file with new text

    
    fclose($file); // close file

    echo "File created successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create file</title>
</head>
<body>
	<form method="POST">
		<label for="filename">Name file:</label>
		<input type="text" id="filename" name="filename"><br><br>
		<label for="text">Text</label>
		<textarea id="text" name="text" rows="4" cols="50"></textarea><br><br>
		<input type="submit" value="Make a file">
	</form>
</body>
</html>
