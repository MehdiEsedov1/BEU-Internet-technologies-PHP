<?php
// PDO (PHP Data Objects) verilənlər bazaları ilə əlaqə qurmaq üçün OOP yönümlü interfeys təqdim edir.
// PDO vasitəsilə verilənlər bazası ilə əlaqə qura və məlumatları manipulyasiya edə bilərik.
// PDO-nun üstünlükləri:
// 1. SQL injection-dan qorunma üçün "prepared statements" mexanizmi təqdim edir.
// 2. Müxtəlif verilənlər bazası sistemləri arasında keçidi asanlaşdırır (məsələn, MySQL-dən PostgreSQL-ə).
// 3. Xəta idarəçiliyini Exception mexanizmi vasitəsilə asanlaşdırır.

$dsn = "mysql:host=localhost;dbname=testdb;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // DELETE sorğusu
    $query = "DELETE FROM users WHERE age > :age";

    $stmt = $pdo->prepare($query);

    $data = [
        ":age" => 18,
    ];

    // Sorğunun icrası
    $stmt->execute($data);

    // Silinən sətirlərin sayını əldə et
    $rowsAffected = $stmt->rowCount();

    if ($rowsAffected > 0) {
        echo "$rowsAffected  satır uğurla silindi!";
    } else {
        echo "Heç bir satır silinmədi!";
    }
} catch (PDOException $e) {
    echo "Xəta: " . $e->getMessage();
}
