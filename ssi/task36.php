<?php
$username = "root";
$password = "";
$servername = "localhost";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error!" . $conn->connect_error);
}

$ids = [1, 3];
$query = "DELETE FROM usersinfo WHERE id IN (?, ?)";

$stmt = $conn->prepare($query);
$stmt->bind_param("ii", $ids[0], $ids[1]);

if ($stmt->execute()) {
    echo "Data silindi.";
} else {
    echo "Data silinmədi.";
}

$stmt->close();
$conn->close();
