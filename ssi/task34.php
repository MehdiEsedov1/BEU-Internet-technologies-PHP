<?php
// Verilənlər bazası bağlantısı üçün məlumatlar
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db"; // Verilənlər bazasının adı

// Bağlantı yarat
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı yoxlanır
if (!$conn) {
    die("Bağlantı xətası: " . mysqli_connect_error());
}

// Yeni şifrəni alırıq (məsələn, formdan gələn məlumatla)
$newPassword = "yeniSifre123"; // Burada istifadəçi tərəfindən girilən yeni şifrə olacaq

// Şifrəni şifrələyirik
$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// İstifadəçinin ID-si (və ya hər hansı bir unikal məlumat) ilə onu tapırıq
$userId = 1; // Misal üçün, ID 1 olan istifadəçini yeniləyirik

// SQL sorğusu yaradılır və icra edilir
$sql = "UPDATE users SET password = ? WHERE id = ?";

// Hazırlanmış ifadə ilə bağlantı
$stmt = mysqli_prepare($conn, $sql);

// Parametrləri bağlamaq (şifrələnmiş şifrə və istifadəçinin ID-si)
mysqli_stmt_bind_param($stmt, "si", $hashedPassword, $userId);

// İcra et
if (mysqli_stmt_execute($stmt)) {
    echo "Şifrə uğurla yeniləndi!";
} else {
    echo "Şifrəni yeniləyərkən xəta baş verdi!";
}

// Hazırlanmış ifadəni bağla və bağlantını bağla
mysqli_stmt_close($stmt);
mysqli_close($conn);
