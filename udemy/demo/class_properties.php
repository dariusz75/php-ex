<?php

class Car {

	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 4;

	function MoveWheels() {
		echo "Wheels are moving!";
	}

}

$bmw = new Car();

echo $bmw->wheels;

?>


<!--
Ab stworzych wlasciwosc w klasie, nalezy uzyc var oraz nazwy zmiennej poprzedzonaej znakiem $.
Aby odwolac sie do wlasciwosci musimy uzyc operatora ->
Czyli w przypadku echo $bmw->wheels na ekranie wyswietlona zostanie liczba kol, 
czyli w naszym przypadku 4.
Nalezy pamietac ze odwolujac sie do wlasciwosci klasy nie stosujemy znaku $
czyli nie $bmw->$wheels a $bmw->wheels

-->

