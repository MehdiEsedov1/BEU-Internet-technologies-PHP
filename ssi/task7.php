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

    // Sorğu: Yaş 18-dən böyük olan istifadəçilərin adını və yaşını yeniləmək
    $query = "UPDATE users SET name = :name, age = :age WHERE age > :ageCondition";

    // Yeni məlumat
    $data = [
        ":name" => "Ali", // Yeni ad
        ":age" => 30, // Yeni yaş
        ":ageCondition" => 18, // Yaşın böyük olduğu minimum dəyər
    ];

    // Hazırlanmış sorğu
    $stmt = $pdo->prepare($query);

    // Sorğunu icra et
    $stmt->execute($data);

    echo "Verilənlər uğurla yeniləndi!";
} catch (PDOException $e) {
    echo "Xəta: " . $e->getMessage();
}
