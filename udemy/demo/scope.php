<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

<?php

$scopeExample = 'This message comes from a global scope.';

function changeScope() {

	global $scopeExample;
	$scopeExample = 'And this message comes from a local scope.';

}

echo $scopeExample;

changeScope();

echo '<br>';

echo $scopeExample;

?>

</body>
</html>