<?php
require 'dotenv.php';

$servername = getenv('DB_SERVERNAME');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure the database exists
$createDB = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($createDB) === FALSE) {
    die("Error creating database: " . htmlspecialchars($conn->error));
}

// Use the database
$conn->select_db($dbname);

// Ensure the table exists
$createTable = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($createTable) === FALSE) {
    die("Error creating table: " . htmlspecialchars($conn->error));
}
?>