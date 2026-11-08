
<?php
session_start();

$conn = new mysqli("localhost", "root", "", "ejportal");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
