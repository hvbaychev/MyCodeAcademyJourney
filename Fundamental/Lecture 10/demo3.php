<?php

<!DOCTYPE html>
<html>
<head>
	<title>Calculate student average</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="students">Enter student names and their grades:</label>
		<textarea id="students" name="students" rows="5" cols="40"></textarea><br><br>
		<input type="submit" value="Submit">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$students = $_POST["students"];
		$myArr = array_map(function($row) {
		    $row = preg_replace("/\s+/", " ", $row); // remove extra spaces
		    return explode(" ", $row);
		}, explode("\n", $students));
		echo studentsCalculation($myArr);
	}

	function studentsCalculation($evaluation) {
		// your existing code goes here
	}
	?>
</body>
</html>

function generateBookTable($bookArray) {
  $table = '<table>';
  $table .= '<thead><tr><th>Заглавие</th><th>Автор</th><th>Година</th><th>Жанр</th></tr></thead>';
  $table .= '<tbody>';
  
  foreach ($bookArray as $book) {
    $title = $book['title'];
    $author = $book['author'];
    $year = $book['year'];
    $genre = $book['genre'];
    
    $table .= "<tr><td>$title</td><td>$author</td><td>$year</td><td>$genre</td></tr>";
  }
  
  $table .= '</tbody></table>';
  
  return $table;
}
// Входящ масив с информация за книги
$bookArray = array(
    array(
      'title' => 'Игра на тронове',
      'author' => 'Джордж Р. Р. Мартин',
      'year' => 1996,
      'genre' => 'Фентъзи'
    ),
    array(
      'title' => 'Хобитът',
      'author' => 'Дж. Р. Р. Толкин',
      'year' => 1937,
      'genre' => 'Фентъзи'
    ),
    array(
      'title' => 'Престъпление и наказание',
      'author' => 'Фьодор Достоевски',
      'year' => 1866,
      'genre' => 'Класика'
    )
  );
  
  // Извикване на функцията и показване на генерираната таблица
  echo generateBookTable($bookArray);
  