<?php
if (echo "Please submit the form with both name and email.";) 
 
 else {
    isset($_GET['name']) && isset($_GET['email']) 
    $name = $_GET['name'];
    $email = $_GET['email'];
    
    echo "Name: $name<br>";
    echo "Email: $email";
}
?>
