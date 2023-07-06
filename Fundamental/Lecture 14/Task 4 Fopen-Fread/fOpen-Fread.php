<?php
if(isset($_POST['source_file']) && isset($_POST['target_file'])) {
  
    $source_file = fopen($_POST['source_file'], 'rb');
    
    $target_file = fopen($_POST['target_file'], 'wb');
    
    while(!feof($source_file)) {
        $data = fread($source_file, 1024);
        fwrite($target_file, $data);
    }
    
    fclose($source_file);
    fclose($target_file);
    
    echo "File is copy!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Copy file</title>
</head>
<body>
	<form method="POST">
		<label for="source_file">Exit file:</label>
		<input type="text" id="source_file" name="source_file"><br><br>
		<label for="target_file">Target file:</label>
		<input type="text" id="target_file" name="target_file"><br><br>
		<input type="submit" value="Copy file">
	</form>
</body>
</html>
