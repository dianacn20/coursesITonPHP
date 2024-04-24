<?php
ini_set('display_errors', 1);

// Database connection information
// Conexiunea la baza de date
$servername = "localhost";
$username = "root";
$password = "root";

// Create database connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}
else
{
}

$sql = "CREATE DATABASE IF NOT EXISTS crafti";
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

$conn->select_db("crafti");

$sql = "CREATE TABLE IF NOT EXISTS events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    location VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    available_seats INT DEFAULT 12,
    max_seats INT DEFAULT 12,
    photo BLOB NOT NULL
)";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

$sql = "CREATE TABLE IF NOT EXISTS children (
    event_id INT,
    name VARCHAR(255) NOT NULL,
    FOREIGN KEY (event_id) REFERENCES events(id)
)";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

$sql = "CREATE TABLE IF NOT EXISTS managers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

?>


