<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $gender = $_POST['gender'];

  echo "<h2>Registration Successful</h2>";
  echo "Name: " . $name . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Gender: " . $gender . "<br>";
}
?>
