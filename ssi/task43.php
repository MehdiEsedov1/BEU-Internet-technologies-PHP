<?php
$servername = "localhost";
$dbname = "users";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error");
}

$name = "Adrian";
$surname = "Harris";
$id = 2;

$query = "UPDATE usersinfo SET name = ?, surname = ? WHERE id = ?";

$stmt = mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt, "ssi", $name, $surname, $id);
$result = mysqli_stmt_execute($stmt);

if ($result) {
    echo "data update oldu";
} else {
    echo "data update olmadı";
}

mysqli_close($conn);
mysqli_stmt_close($stmt);
