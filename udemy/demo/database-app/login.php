<?php

if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];

	if($username && $password) {

		echo '<div class="alert alert-success" role="alert">You are been logged in</div>';
	} else {
		echo '<div class="alert alert-danger" role="alert">Please provide Username and Password</div>';
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

			<form action="login.php" method="post">
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