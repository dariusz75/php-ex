<?php
include 'db.php';

/* Funkcja generujaca tagi <opton> w tagu <select> zawierajace id uzytkownikow  */
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

/* Funkcja uakualniajaca record w bazie danych */
function updateTable() {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "UPDATE users SET ";
	$query .= "username = '$username', ";
	$query .= "password = '$password' ";
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);

	if (!$result) {
		die ("QUERY FAILED!" . mysqli_error($connection));
	} else {
  
  echo "Record Updated"; 
  
  }
}


/* Funkcja kasujaca  record w bazie danych */
function deleteRow() {

	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "DELETE FROM users ";
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);

	if (!$result) {
		die ("QUERY FAILED!" . mysqli_error($connection));
	} else {
  
  echo "Record Deleted"; 
  
  }
}

?>


<!--
Funkcja showIds() sluzy do pobrania id uzytkownikow i umieszczenia ich w tagach <option> tagu <select>.
Tym sposobem tworzymy liste uzytkownikow wybierancych po id, ktorych dane mozemy nastepnie edytowac.

W celu wygenerowania listy tagow <option> musimy posluzyc sie petla while 

-->