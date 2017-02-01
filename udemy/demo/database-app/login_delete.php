<?php 
include "db.php";
include "functions.php";


	if (isset($_POST['submit'])) {
	
		deleteRecord();
		
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
            <li><a href="login_read.php">READ</a></li>
            <li><a href="login_update.php">UPDATE</a></li>
            <li class="active"><a href="login_delete.php">DELETE</a></li>
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse" id="nav-collapse1">
            <li><a href="login_create.php">CREATE<</a></li>
            <li><a href="login_read.php">READ</a></li>
            <li><a href="login_update.php">UPDATE</a></li>
            <li class="active"><a href="login_delete.php">DELETE</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->


		<div class="col-sm-3">

		<form action="login_delete.php" method="post">
				<div class="form-group">
				<label for="username">Username</label>
					<input class="form-control" type="text" name="username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password">
				</div>
				<div class="form-group">
					<select name="id">
						<?php

						showIds();

						?>

					</select>
				</div>
				<input class="btn btn-primary" type="submit" name="submit" value="DELETE">
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