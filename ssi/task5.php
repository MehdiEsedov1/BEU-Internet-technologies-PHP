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
    // Verilənlər bazasına qoşulma
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL Sorğusu və Hazırlanmış Bəyanat
    $query = "INSERT INTO users (name, surname, age) VALUES (:name, :surname, :age)";
    $stmt = $pdo->prepare($query);

    // Datanın Təyini
    $data = [
        ':name' => 'Elvin',
        ':surname' => 'Quliyev',
        ':age' => 25,
    ];

    // Sorğunun İcrası
    if ($stmt->execute($data)) {
        echo "Məlumat uğurla əlavə edildi!";
    } else {
        echo "Məlumat əlavə olunmadı!";
    }
} catch (PDOException $e) {
    // Xəta Mesajı (istehsalat mühitində göstərməmək tövsiyə olunur)
    echo "Xəta baş verdi: " . $e->getMessage();
}
