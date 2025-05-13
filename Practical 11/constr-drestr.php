<?php
class ABC {

    // Constructor
    function __construct() {
        echo "Constructor called !!! <br>";
    }

    // Destructor
    function __destruct() {
        echo "Destructor called !!! <br>";
    }
}


$obj = new ABC();

echo "The destructor will be called automatically at the end of the script <br>";

?>