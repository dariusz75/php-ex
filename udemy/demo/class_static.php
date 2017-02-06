<?php

class Car {

	static $wheels = 14;
	var $hood = 1;
	var $engine = 1;
	var $doors = 5;


}


echo Car::$wheels;

?>


<!--
static jest to rodzaj zmiennej przypisanej, czyli takiej do ktorej nie mamy dostepu bezposredniego.
Aby uzyskac dosteptep musimy uzyc operatora ::
Nalezy pamietac ze po operatorze :: musimy uzyc pelnej nazwy zmiennej wlasciwosci czyli lacznie z symbolem $, np. $wheels
-->

