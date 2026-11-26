<?php

// Connect to MySQL server without selecting a database
$conn = new mysqli("localhost", "root", "", "", 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL server successfully.<br>";

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS college_db";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully.<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// Select the database
$conn->select_db("college_db");

// Create students table
$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT,
    course VARCHAR(50),
    fees DECIMAL(10,2),
    admission_date DATE
)";

if ($conn->query($sql) === TRUE) {
    echo "Students table created successfully.";
} else {
    die("Error creating table: " . $conn->error);
}

$conn->close();

?>
