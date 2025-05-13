<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . " (from session)<br>";
} elseif (isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'] . " (from cookie)<br>";
} else {
    echo "User not logged in.<br>";
    echo "<a href='login.php'>Login</a>";
    exit();
}
?>

<br>
<a href="logout.php">Logout</a>
