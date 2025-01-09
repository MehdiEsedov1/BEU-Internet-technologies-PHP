<?php
$dsn = "mysql:host=localhost;dbname=users;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = 2;
    $query = "DELETE FROM usersinfo WHERE id = ?";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Data silindi.";
    } else {
        echo "Data silinmədi.";
    }
} catch (PDOException $e) {
    echo "Xəta: " . $e->getMessage();
}
