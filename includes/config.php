<?php
// Database configuration
$host = 'localhost'; // MySQL host (usually localhost)
$dbname = 'car_rental_system'; // Your MySQL database name
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password

// Attempt to connect to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If connection fails, display error message
    die("Connection failed: " . $e->getMessage());
}
