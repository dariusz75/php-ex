<?php

$file = "example.txt";

if ($handle = fopen($file, 'r')) {

	$content = fread($handle, 6);
	echo $content ;

	fclose($handle);

} else {

	echo "The application was not able to write on the file.";

}

?>

<!--
Do otworzenia pliku sluzy funkcja fopen()
Funkcja ta pobiera 2 parametry. 
Pierwszy paramatr to nazwa zmiennej przypisana do pliku ktory chcemy otworzyc.
Drugi to intencja ktora chcemy wykonac, w naszym przypadku to zapis do pliku, czyli - 'w'

Do odczytu pliku sluzy funkcja fread()
Funkcja ta rowniez pobiera 2 parametry.
Pierwszy paramatr to nazwa zmiennej przypisana do funkcji fopen() okreslonej w if statement.
Drugi to liczba okreslajaca liczbe znakow jaka chcemy odczytac.


Funkcje fopen() przypisujemy do zmiennej ktora nastepnie przekazujemy jako argument do funkcji fclose().
Spowoduje to zamkniecie pliku.
-->