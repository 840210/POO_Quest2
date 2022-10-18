<?php

require_once('src/Car.php');
require_once('src/Vehicle.php');
require_once('src/Trucks.php');


$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);





?>