<?php

class Car {

	function MoveWheels() {
		echo "Wheels are moving!";
	}

}


$bmw = new Car();
$mercedes = new Car();

$bmw->MoveWheels();
$mercedes->MoveWheels();

?>



