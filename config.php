<?php
// Local development database configuration.
// Update these values if your MySQL setup uses different credentials.
$host = "localhost";
$user = "root";
$pass = "";
$db   = "college_portal";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed.");
}

$conn->set_charset("utf8mb4");
?>
