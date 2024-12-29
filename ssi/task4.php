<?php
// PDO (PHP Data Objects) verilənlər bazaları ilə əlaqə qurmaq üçün OOP yönümlü interfeys təqdim edir.
// PDO vasitəsilə verilənlər bazası ilə əlaqə qura və məlumatları manipulyasiya edə bilərik.
// PDO-nun üstünlükləri:
// 1. SQL injection-dan qorunma üçün "prepared statements" mexanizmi təqdim edir.
// 2. Müxtəlif verilənlər bazası sistemləri arasında keçidi asanlaşdırır (məsələn, MySQL-dən PostgreSQL-ə).
// 3. Xəta idarəçiliyini Exception mexanizmi vasitəsilə asanlaşdırır.

// PDO ilə DB-a qoşulma nümunəsi:
$dsn = "mysql:host=localhost;dbname=testdb;charset=utf8mb4"; // DSN (Data Source Name) təyin olunur.
$username = "root"; // DB istifadəçi adı.
$password = ""; // DB istifadəçi şifrəsi.

try {
    // PDO obyektinin yaradılması
    $pdo = new PDO($dsn, $username, $password);

    // PDO Error Mode-nu Exception olaraq təyin etmək
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Verilənlər bazasına uğurla qoşuldu!";
} catch (PDOException $e) {
    // Hər hansı bir qoşulma xəta baş verərsə, burada tutulur
    echo "Verilənlər bazasına qoşulmada xəta baş verdi: " . $e->getMessage();
}
