<?php

/*
Write a PHP script MostFrequentTag.php which generates an HTML input text field, submit button and clear button
. In the text field the user must enter different tags, separated by a comma and a space (", "). 
When the information is submitted, the script should generate a list of the tags, sorted by frequency. 
Then you must print: "Most Frequent Tag is: [most frequent tag]".
 You should be able add N number of rows through multiple form submission, 
 every time the input should be added up to the previous one and the list should be updated. 
 When you press the Clear button the list should be cleared and the next input you add will generate a new list. 
 Use pure PHP Solution without JavaScript.
 Semantic HTML is required. Styling is not required. Example:
*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Most Frequent Tag</title>
</head>
<body>
	<form method="POST">
		<label>Enter tags:</label>
		<input type="text" name="tags">
		<input type="submit" name="submit" value="Submit">
		<input type="submit" name="clear" value="Clear">
	</form>

	<?php

	if (isset($_POST['submit'])) {
		$tags = explode(', ', $_POST['tags']);
		$tag_counts = array_count_values($tags);
		arsort($tag_counts);
		$most_frequent_tag = array_key_first($tag_counts);

		echo '<ol>';
		foreach ($tag_counts as $tag => $count) {
			echo '<li>' . $tag . ' (' . $count . ')</li>';
		}
		echo '</ol>';
		echo 'Most Frequent Tag is: ' . $most_frequent_tag;
	}

	if (isset($_POST['clear'])) {

		session_start();
		unset($_SESSION['tags']);
		session_destroy();
	}
	?>
</body>
</html>
