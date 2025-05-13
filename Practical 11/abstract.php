<?php
abstract class Vehicle {
    abstract public function startEngine();

    public function fuelType() {
        return "Petrol or Diesel";
    }
}

class Car extends Vehicle {
    public function startEngine() {
        return "Car engine started with a key.";
    }
}

$myCar = new Car();

echo $myCar->startEngine();
echo "<br>";
echo "Fuel Type: " . $myCar->fuelType();
?>
