<?php
$dsn = "mysql:host=localhost;dbname=users;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE usersinfo SET name = ?, surname = ? WHERE id = ?";

    $stmt = $pdo->prepare($query);

    $name = "Adrian";
    $surname = "Harris";
    $id = 2;

    $stmt->execute([$name, $surname, $id]);

    if ($stmt->rowCount() > 0) {
        echo "data update oldu";
    } else {
        echo "data update olmadı";
    }
} catch (PDOException $e) {
    echo "Xəta: " . $e->getMessage();
}
