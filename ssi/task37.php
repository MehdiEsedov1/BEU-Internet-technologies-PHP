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

    $stmt->execute([$name, $surname]);

    echo "Məlumat uğurla əlavə edildi.";
} catch (PDOException $e) {
    echo "Xəta: " . $e->getMessage();
}
