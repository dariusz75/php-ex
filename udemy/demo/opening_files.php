<?php

$file = "example.txt";

$handle = fopen($file, 'w');

fclose($handle);

?>

<!--
Do otworzenia pliku sluzy funkcja fopen().
Funkcja ta pobiera 2 parametry. 
Pierwszy paramatr to nazwa zmiennej przypisana do pliku ktory chcemy otworzyc.
Drugi to intencja ktora chcemy wykonac, w naszym przypadku to zapis do pliku, czyli - 'w'

Funkcje fopen() przypisujemy do zmiennej ktora nastepnie przekazujemy jako argument do funkcji fclose().
Spowoduje to zamkniecie pliku.
-->