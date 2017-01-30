<?php 
include "db.php";
include "functions.php";


	if (isset($_POST['submit'])) {
	
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

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="col-sm-3">

		<form action="login_update.php" method="post">
				<div class="form-group">
				<label for="username">Update Username</label>
					<input class="form-control" type="text" name="username">
				</div>
				<div class="form-group">
					<label for="password">Update Password</label>
					<input class="form-control" type="password" name="password">
				</div>
				<div class="form-group">
					<select name="id">
						<?php

						showIds();

						?>

					</select>
				</div>
				<input class="btn btn-primary" type="submit" name="submit" value="Update">
			</form>
			
		</div>
	</div>

</body>
</html>


<!--
Za uaktualnienie rekordu z bazy danych odpowiadaja nastepujace czynnosci:
1) Polaczenie z baza danych - w naszym przypadku przypisane do zmiennej - $connection
2) Zapytanie o odczytanie danych - $query
3) Wyslanie powyzszych instrukcji do bazy danych.

Amy zmienic dane uzytkownika w bazie, do jego selekcji polsluzymy sie jego id ktora wygenerujemy dynamicznie z bazy danych i skierujemy do pola Select. - PATRZ PLIK functions.php

Aby to zrobic zastosujemy petle while generujaca tagi <option> zawierajace nzawy uzytkownika.

-->