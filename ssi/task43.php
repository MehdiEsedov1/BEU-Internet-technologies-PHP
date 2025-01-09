<?php
$servername = "localhost";
$dbname = "users";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}

$query = "UPDATE usersinfo SET name = ?, surname = ? WHERE id = ?";

$name = "Adrian";
$surname = "Harris";
$id = 2;

$stmt = $conn->prepare($query);
$stmt->bind_param("ssi", $name, $surname, $id);

if ($stmt->execute()) {
    echo "data update oldu";
} else {
    echo "data update olmadı";
}

$stmt->close();
$conn->close();
