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

/* Funkcja tworzaca record w bazie danych */
function createRecord() {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
	$query = "INSERT INTO users(username, password)"  . "VALUES ('$username', '$password')";
	$result = mysqli_query($connection, $query);

	if ($username && $password) {
		echo '<div class="alert alert-success" role="alert">Your new record has been saved in database.</div>';
	}

	if (!$result) {
		die('Database connection failed!');
	}
}

/* Funkcja uakualniajaca record w bazie danych */
function updateRecord() {

	global $connection;
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
  
  echo '<div class="alert alert-success" role="alert">Your record has been updated in database.</div>';
  
  }

}


/* Funkcja kasujaca  record w bazie danych */
function deleteRecord() {

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
  
  echo '<div class="alert alert-success" role="alert">Your record has been deleted from database.</div>';
  
  }
}

function readRecords() {
	global $connection;
	global $result;
	$query = " SELECT * FROM users ";
	$result = mysqli_query($connection, $query);


	if ($result) {
		echo '<div class="alert alert-success" role="alert">You have been connected to database.</div>';
	} 
}

?>


<!--
Funkcja showIds() sluzy do pobrania id uzytkownikow i umieszczenia ich w tagach <option> tagu <select>.
Tym sposobem tworzymy liste uzytkownikow wybierancych po id, ktorych dane mozemy nastepnie edytowac.

W celu wygenerowania listy tagow <option> musimy posluzyc sie petla while 

-->