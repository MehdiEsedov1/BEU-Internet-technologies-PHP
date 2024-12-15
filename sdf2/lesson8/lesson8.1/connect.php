<?php
# First method
$server = "localhost";
$username = "root";
$password = "12345678";

$conn = mysqli_connect($server, $username, $password);

// Checking connection
if (!$conn) {
    die("Error: " . mysqli_connect_error());
}

# ---------------------------------------

# Second method, if we want to create the database and table ourselves

// Check if the database exists
$dbName = "mydb";

$sql = "CREATE DATABASE IF NOT EXISTS $dbName";

if (mysqli_query($conn, $sql)) {
    echo "Connected";
} else {
    die("Error: " . mysqli_error($conn));
}

// Select the database
mysqli_select_db($conn, $dbName);

// Check if the table exists and create it if not
$tableName = "users"; // Table name

$sql = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created";
} else {
    die("Error: " . mysqli_error($conn));
}

mysqli_close($conn);
