<?php
$username = "root";
$password = "";
$servername = "localhost";
$dbname = "users";

$name = "Lewis";
$surname = "Hamilton";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "INSERT INTO usersinfo (name, surname) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt, "ss", $name, $surname);

$result = mysqli_stmt_execute($stmt);

if ($result) {
    echo "Əlavə edildi";
} else {
    echo "Əlavə edilmədi";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
