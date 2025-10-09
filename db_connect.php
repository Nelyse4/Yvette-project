<?php
$host = 'localhost';
$db   = 'u374871628_CongoWeek';
$user = 'u374871628_kiraEvans';           // Default user for XAMPP
$pass = 'CongoWeek2025';               // Leave blank if you haven’t set a password

$conn = new mysqli('localhost', 'u374871628_kiraEvans', 'CongoWeek2025', 'u374871628_CongoWeek');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected successfully!";
}

?>
