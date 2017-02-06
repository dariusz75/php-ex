<?php

class Car {

	function WheelsDriven() {
		echo "4 wheels driven";
	}

}

if (method_exists("Car", "WheelsDriven")) {
	echo "Method exists!";
} else {
	echo "Method does not exist!";
}



?>