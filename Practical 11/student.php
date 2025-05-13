<?php

class Student {

    function display($name,$age) {
        echo "Name : $name<br>";
        echo "Age : $age<br>";
    }

}

$student = new Student();

$student->display("Digambar",21);

?>
