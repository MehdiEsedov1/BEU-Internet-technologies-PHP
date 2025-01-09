<?php
$dsn = "mysql:host=localhost;dbname=users;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE usersinfo SET name = ?, surname = ? WHERE id = ?";

    $name = "Adrian";
    $surname = "Harris";
    $id = 2;

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->bindValue(2, $surname, PDO::PARAM_STR);
    $stmt->bindValue(3, $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "data update oldu";
    } else {
        echo "data update olmadı";
    }
} catch (PDOException $e) {
    echo "Xəta: " . $e->getMessage();
}
