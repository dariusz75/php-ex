<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Document</title>
</head>
<body>


<?php 

$myArray = array(1, 2, 3, 'one', 'two', 'three', '<h1>', '</h1>');

echo $myArray[0];

echo $myArray[1];

echo $myArray[2]; 

echo $myArray[6] . $myArray[3] . $myArray[7]; 


?>

</body>
</html>