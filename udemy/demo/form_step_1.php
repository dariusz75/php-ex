<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Document</title>
</head>
<body>

	<form action="form_step_1.php" method="post">
		<input type="text" placeholder="Name" name="name">
		<br>
		<input type="password" placeholder="Password" name="password">
		<br>
		<input type="submit" name="submited">
	</form>




<?php

if(isset($_POST['submited'])) {
	echo "<h3>Yes, you've submited the form!</h3>";
} elseif (isset($_POST['name'])) {
	echo "<h3>Yes, you've entered the name!</h3>";
} elseif (isset($_POST['password'])) {
	echo "<h3>Yes, you've entered the password!</h3>";
}


?>

</body>
</html>

<!--
Aby zainicjowac pobieranie danych z formularza musimy uzyc atrybutu action odwolujacego sie do pliku php
w ktorym bedziemy zapisywac dane. W naszym przypadku jest to plik form.php, czyli ten w ktorym pracujemy obecnie.
Musimy rowniez okreslic metode zapisu danych czyli method="post".
Teraz musimy okreslic gdzie dokladnie ma trafic pobrana wartosc. W PHP sluzy do tego superglobalna zmienna _POST.

Nadszedl czas na napisanie kodu PHP.
Aby sprawdzic czy formularz zostal submitowany, czyli czy spelnil okreslone warunki musimy uzyc if satement.
Nastepnie w if statement uzywamy wbudowanej funkcji isset(), ktora sprawdzi czy zmienna _POST odpowiadajaca za
przechowywanie rekordu, taki rekord posiada. Zmienna _POST jak widzimy jest tablica.

Aby przeslac dane z formularza potrzebujemy jeszcze jednego atrybutu, ktorym jest name.
W naszym przypadku jest to name="submited", gdzie "submited" po zatwierdzeniu formularza trafia jako wartosc do tablicy
zmiennej _POST.



-->