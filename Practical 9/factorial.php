<?php
function factorial($num) { //This is function 
    if ($num < 0) {
        return "Invalid input";
    }
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}

$num = 7;
echo "The factorial of $num is: " . factorial($num); //function call
?>