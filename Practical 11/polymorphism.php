<?php
class Animal {
    function makeSound() {
        echo "any sound";
    }
}

class Dog extends Animal {
    function makeSound() {
        echo "Bark";
    }
}

$obj_1 = new Animal();
$obj_2 = new Dog();

$obj_1->makeSound();
echo "<br>";    
$obj_2->makeSound(); 

?>
