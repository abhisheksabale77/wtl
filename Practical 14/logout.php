<?php
session_start();
session_unset();
session_destroy();

setcookie("username", "", time() - 3600, "/");

echo "You have been logged out.<br>";
echo "<a href='login.php'>Go to Login</a>";
?>
