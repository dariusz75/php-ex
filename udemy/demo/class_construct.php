<?php

class Car {

	var $wheels = 4;
	var $hood = 1;
	var $engine = 1;
	var $doors = 5;

	function __construct() {
		echo $this->wheels;
	}

}

$bmw = new Car();

?>


<!--
Konstruktor jest metodą o nazwie __construct(), która może pobierać parametry, lecz nie wolno jej zwracać wartości. 
Jej zadaniem jest wykonanie pewnych akcji tuż po utworzeniu obiektu tak, aby można było od razu zacząć z nim pracę.
W powyzszym kodzie konstruktor odpowiada za wyswietlenie wlasciwosci $wheels obiektu Car.
Nastepuje to zaraz po utworzeniu nowej instancji klasy Car.
-->

