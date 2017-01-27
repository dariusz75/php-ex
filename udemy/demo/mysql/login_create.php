<?php

if(isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
	$query = "INSERT INTO users(username, password)"  . "VALUES ('$username', '$password')";
	$result = mysqli_query($connection, $query);

	if ($username && $password) {
		echo '<div class="alert alert-success" role="alert">You are been logged in</div>';
	}

	if (!$result) {
		die('Database connection failed!');
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

			<form action="login_create.php" method="post">
				<div class="form-group">
				<label for="username">Username</label>
					<input class="form-control" type="text" name="username">
				</div>
				<div class="form-group">
				<label for="password">Password</label>
					<input class="form-control" type="password" name="password">
				</div>
				<input class="btn btn-primary" type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>

</body>
</html>

<!--
Za calkowite wprowadzenie rekordu do bazy danych odpowiadaja 3 czynnosci:
1) Polaczenie z baza danych - w naszym przypadku przypisane do zmiennej - $connection
2) Zapytanie o pobranie danych i wyslanie do odpowiednich komorek we wskazanej bazie danych - w naszym przypadku przypisane do zmiennej - $query
3) Wyslanie zapytania do bazy danych, przy uzyciu wbudowanej funkcji mysqli_query()


1) 
Objasnione w poprzedniej lekcji.

2) 
W naszym przypadku wyglada to tak:
$query = "INSERT INTO users(username, password)"  . "VALUES ('$username', '$password')";
Gdzie:
$query - nazwa zmiennej do ktorej przypisalismy instrukcje
users - nazwa naszej tabeli w bazie danych
(username, password) - nazwy pol w tabeli odpowiadajacych za zapisznie danych pobranych z okien input
VALUES - polecenie MYSQL odpowiadajace za zapisanie wartosci
('$username', '$password') - nazwy zmiennych przechowujacych pobrane wartosci.

3)
W naszym przypadku wyglada to tak:
$result = mysqli_query($connection, $query);
Gdzie:
$result - nazwa zmiennej do ktorej przypisalismy funkcje wyslania rekordu do bazy.
$connection - nazwa zmiennej ktorej przypisalismy dokladne namiary bazy danych
$query - dokladne instrukcje do wykonania w bazie danych
-->
