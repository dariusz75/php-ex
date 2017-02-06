<?php

class Car {

	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 5;

	function MoveWheels() {
		echo "Wheels are moving!";
	}

}

$bmw = new Car();


class AnotherCar extends Car {

}

$mercedes = new AnotherCar();
echo $mercedes->doors;

?>


<!--
Dziedzicznosci klasy dokonujemy przy pomocy operatora extends.
W wyniku czego nasz nowy obiekt posiada wszystkie wlasciwosci przypisanego obiektu.
W przypadku kodu powyzej, na ekranie otrzymamy 5
-->

