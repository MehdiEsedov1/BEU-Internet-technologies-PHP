<?php
$dsn = "mysql:host=localhost;dbname=users;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DELETE FROM usersinfo WHERE id = ?";
    $id = 2;

    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);

    if ($stmt->rowCount() > 0) {
        echo "Data silindi.";
    } else {
        echo "Data silinmədi.";
    }
} catch (PDOException $e) {
    echo "Xəta: " . $e->getMessage();
}
