<?php
// 1. Super Global Dəyişənlər

// $_GET - URL vasitəsilə verilən məlumatı almaq üçün istifadə edilir
if (isset($_GET['name'])) {
    echo "Salam, " . $_GET['name'] . "!<br>"; // URL-də 'name' parametrindən məlumatı alırıq
}

// $_POST - HTML formaları vasitəsilə verilən məlumatı göndərmək və almaq üçün istifadə edilir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan məlumat alınır
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "Ad: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}

// $_SESSION - Sayfalar arasında məlumatı saxlamaq üçün istifadə edilir
session_start(); // Sessiyanı başladırıq

$_SESSION['user'] = 'Elvin'; // Sessiyaya istifadəçi adı əlavə edirik
echo "Sessiya dəyəri: " . $_SESSION['user'] . "<br>"; // Sessiya dəyərini çap edirik

// $_COOKIE - Brauzerdə məlumat saxlamaq üçün istifadə edilir
setcookie("user_email", "elvin@example.com", time() + (86400 * 30), "/"); // Cookie 30 gün saxlanacaq
echo "Cookie dəyəri: " . $_COOKIE['user_email'] . "<br>"; // Cookie dəyərini çap edirik

// 2. Super Global Dəyişənlər haqqında Qısa İzah

/*
- $_GET: URL ilə məlumat göndərmək üçün istifadə olunur.
- $_POST: HTML formaları ilə serverə məlumat göndərmək üçün istifadə olunur.
- $_SESSION: Sessiya məlumatları sayfanın bir neçə dəyişikliyi boyunca saxlanır.
- $_COOKIE: Brauzerdə məlumat saxlayır və sayfa yeniləndikdə saxlanılır.
 */
