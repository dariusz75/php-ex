<?php
include 'db.php';

function showIds() {

	global $connection;
	$query = " SELECT * FROM users ";
	$result = mysqli_query($connection, $query);

	if (!$result) {
			die ('Connection FAILED . mysqli_error($connection)');
		}

	while ($row = mysqli_fetch_assoc($result)) {
							
		$id = $row['id'];

		echo "<option value='$id'>$id</option>";
						
	}

}


?>


<!--
Funkcja showIds() sluzy do pobrania id uzytkownikow i umieszczenia ich w tagach <option> tagu <select>.
Tym sposobem tworzymy liste uzytkownikow wybierancych po id, ktorych dane mozemy nastepnie edytowac.

W celu wygenerowania listy tagow <option> musimy posluzyc sie petla while 

-->