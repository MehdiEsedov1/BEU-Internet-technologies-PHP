<?php
$username = "root";
$password = "";
$servername = "localhost";
$dbname = "users";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT id, name, surname FROM usersinfo";

$stmt = mysqli_prepare($conn, $query);

if (!$stmt) {
    die("Statement preparation failed: " . mysqli_error($conn));
}

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'] . " - " . $row['name'] . " - " . $row['surname'] . "<br>";
    }
} else {
    echo "Nəticə tapılmadı.";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
