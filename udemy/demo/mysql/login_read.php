<?php

	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
	$query = " SELECT * FROM users ";
	$result = mysqli_query($connection, $query);


	if ($result) {
		echo ('You have been conected!');
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

		<?php 
			while ($row = mysqli_fetch_assoc($result)) {
		?>

		<pre>
			<?php
				print_r($row);
			?>
		</pre>

		<?php
	}
		?>
			
		</div>
	</div>

</body>
</html>


<!--
Za odczytanie rekordu z bazy danych odpowiadaja 2 czynnosci:
1) Polaczenie z baza danych - w naszym przypadku przypisane do zmiennej - $connection
2) Zapytanie o odczytanie danych - $query
3) Wyslanie powyzszych instrukcji do bazy danych.


1) 
Objasnione w poprzedniej lekcji.

2) 
W naszym przypadku wyglada to tak:
$query = " SELECT * FROM users ";;
Gdzie:
$query - nazwa zmiennej do ktorej przypisalismy instrukcje
users - nazwa naszej tabeli w bazie danych
(username, password) - nazwy pol w tabeli odpowiadajacych za zapisznie danych pobranych z okien input
SELECT * FROM users- polecenie MYSQL odpowiadajace za wybranie wszystkich wartosci z kolumny users w bazie danych

3)
W naszym przypadku wyglada to tak:
$result = mysqli_query($connection, $query);
Gdzie:
$connection - nazwa zmiennej ktorej przypisalismy dokladne namiary bazy danych
$query - dokladne instrukcje do wykonania w bazie danych
$result - nazwa zmiennej do ktorej przypisalismy zadania do wykonania w bazie danych
-->