<?php

$server = "localhost";
$username = "root";
$password = "12345678";
$dbName = "mydb";

$conn = mysqli_connect($server, $username, $password, $dbName);

if (!$conn) {
    die("Xeta: " . mysqli_connect_error());
}
