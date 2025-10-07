<?php
$host = 'localhost';
$db   = 'event_forms';
$user = 'root';           // Default user for XAMPP
$pass = '';               // Leave blank if you haven’t set a password

$conn = new mysqli('localhost', 'root', '', 'event_forms');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected successfully!";
}

?>
