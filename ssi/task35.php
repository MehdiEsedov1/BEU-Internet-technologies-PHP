<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Bağlantı uğursuz oldu: " . $mysqli->connect_error);
}

$id = 2;
$query = "DELETE FROM usersinfo WHERE id = ?";

$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Data silindi.";
} else {
    echo "Data silinmədi.";
}

$stmt->close();
$mysqli->close();
