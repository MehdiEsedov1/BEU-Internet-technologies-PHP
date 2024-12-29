<?php
// Verilənlər bazasına bağlantı yaradılması
$servername = "localhost"; // Verilənlər bazası serverinin ünvanı
$username = "root"; // İstifadəçi adı
$password = ""; // Şifrə
$dbname = "testdb"; // Verilənlər bazasının adı

// Bağlantı yarat
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantını yoxla
if (!$conn) {
    die("Bağlantı xətası: " . mysqli_connect_error());
}

// ************ Məlumat Çəkilməsi ************
// SQL sorğusu hazırlanır
$sqlSelect = "SELECT id, name, email, age FROM users";

// Sorğunu icra et
$result = mysqli_query($conn, $sqlSelect);

// Məlumatın mövcudluğunu yoxla
if (mysqli_num_rows($result) > 0) {
    echo "<h3>Mövcud məlumatlar:</h3>";
    // Məlumatları çap et
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " | Ad: " . $row["name"] . " | Email: " . $row["email"] . " | Yaş: " . $row["age"] . "<br>";
    }
} else {
    echo "Heç bir məlumat tapılmadı.";
}

// ************ Məlumatın Silinməsi ************
// Silinəcək məlumatın ID-si
$deleteId = 3; // Məsələn, ID-si 3 olan istifadəçini silmək

// Prepared statement ilə SQL sorğusu
$stmt = mysqli_prepare($conn, "DELETE FROM users WHERE id = ?");

// Parametrləri bağla
mysqli_stmt_bind_param($stmt, "i", $deleteId);

// Sorğunu icra et
if (mysqli_stmt_execute($stmt)) {
    echo "ID-si $deleteId olan istifadəçi uğurla silindi!";
} else {
    echo "Xəta: " . mysqli_error($conn);
}

// Statement-i və bağlantını bağla
mysqli_stmt_close($stmt);
mysqli_close($conn);
