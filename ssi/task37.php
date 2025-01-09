<?php
$dsn = "mysql:host=localhost;dbname=users;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = "Lewis";
    $surname = "Hamilton";

    $query = "INSERT INTO usersinfo (name, surname) VALUES (?, ?)";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->bindValue(2, $surname, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "Əlavə edildi";
    } else {
        echo "Əlavə edilmədi";
    }
} catch (PDOException $e) {
    echo "Xəta: " . $e->getMessage();
}
