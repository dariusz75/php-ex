<?php
	include 'db.php';
	include "functions.php";

	readRecords();

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

<nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="login_create.php">CREATE</a></li>
            <li class="active"><a href="login_read.php">READ</a></li>
            <li><a href="login_update.php">UPDATE</a></li>
            <li><a href="login_delete.php">DELETE</a></li>
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
            <li><a href="login_create.php">CREATE<</a></li>
            <li class="active"><a href="login_read.php">READ</a></li>
            <li><a href="login_update.php">UPDATE</a></li>
            <li><a href="login_delete.php">DELETE</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

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