<?php
$username = "root";
$password = "";
$server = "localhost";
$db = "testdb";

$conn = mysqli_connect($username, $password, $server, $db);

if (!$conn) {
    die(mysqli_connect_error());
}

$query = "INSERT INTO users (name, email, age) VALUES (?, ?, ?)";

$name = "User";
$email = "userova@gmail.com";
$age = 18;

$stmt = mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $age);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($conn);
