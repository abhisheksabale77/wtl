<?php
// Single Inheritance
class ParentClass {
    function greet() {
        echo "Hello from ParentClass<br>";
    }
}

class ChildClass extends ParentClass {
    function childGreet() {
        echo "Hello from ChildClass<br>";
    }
}

$single = new ChildClass();
$single->greet();
$single->childGreet();
echo "<br>";




// Multilevel Inheritance
class GrandChildClass extends ChildClass {
    function grandChildGreet() {
        echo "Hello from GrandChildClass<br>";
    }
}

$multilevel = new GrandChildClass();
$multilevel->greet();
$multilevel->childGreet();
$multilevel->grandChildGreet();
echo "<br>";





// Hierarchical Inheritance
class ChildClass_2 extends ParentClass {
    function anotherChildGreet() {
        echo "Hello from ChildClass_2<br>";
    }
}

$hierarchical = new ChildClass_2();
$hierarchical->greet();
$hierarchical->anotherChildGreet();
echo "<br>";





// Multiple Inheritance using Interfaces
interface Interface_1 {
    function method_One();
}

interface Interface_2 {
    function method_Two();
}

class MultipleInheritance implements Interface_1, Interface_2 {
    function method_One() {
        echo "Method from Interface_1<br>";
    }

    function method_Two() {
        echo "Method from Interface_Two<br>";
    }
}

$multiple = new MultipleInheritance();
$multiple->method_One();
$multiple->method_Two();
?>



