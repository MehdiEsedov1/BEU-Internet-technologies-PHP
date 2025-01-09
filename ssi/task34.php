<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı xətası: " . $conn->connect_error);
}

$query = "UPDATE users SET password = ? WHERE id = ?";

$newPassword = "yeniSifre123";
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
$userId = 1;

$stmt = $conn->prepare($query);
$stmt->bind_param("si", $hashedPassword, $userId);

if ($stmt->execute()) {
    echo "Şifrə uğurla yeniləndi!";
} else {
    echo "Şifrəni yeniləyərkən xəta baş verdi!";
}

$stmt->close();
$conn->close();
