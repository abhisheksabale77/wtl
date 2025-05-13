<?php
$conn = new mysqli("localhost", "root", "root", "test_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
)");

$conn->query("INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')");

$result = $conn->query("SELECT id, name, email FROM users");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']} - Name: {$row['name']} - Email: {$row['email']}<br>";
    }
} else {
    echo "No users found.<br>";
}

$conn->close();
?>