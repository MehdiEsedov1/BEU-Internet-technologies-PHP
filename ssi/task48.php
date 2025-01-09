<?php
$username = "root";
$password = "";
$servername = "localhost";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = "Lewis";
$surname = "Hamilton";

$query = "INSERT INTO usersinfo (name, surname) VALUES (?, ?)";

$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $name, $surname);

if ($stmt->execute()) {
    echo "Əlavə edildi";
} else {
    echo "Əlavə edilmədi";
}

$stmt->close();
$conn->close();
