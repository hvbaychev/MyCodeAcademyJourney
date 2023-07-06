<?php
	if(isset($_POST['filename'])){
		$filename = $_POST['filename'];

		$file = fopen($filename, "r");
		if($file){
			$file_contents = fread($file, filesize($filename));
			fclose($file);
			echo $file_contents;
		}
		else{
			echo "Error opening file!";
		}
	}
?>
