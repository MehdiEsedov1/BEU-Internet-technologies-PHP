<?php
// MySQL serverinə qoşulmaq üçün parametrlər
$username = "root"; // MySQL istifadəçi adı
$password = ""; // MySQL şifrəsi (root şifrəsiz ola bilər, ancaq şifrələnmişdirsə daxil etməlisiniz)
$servername = "localhost"; // Serverin adı (localhost çox vaxt istifadə olunur)
$dbname = "test_db"; // Əgər bir verilənlər bazası varsa, onun adı

// MySQL serverinə qoşulma
$conn = new mysqli($servername, $username, $password, $dbname);

// Əgər əlaqə uğursuz olarsa, xətanı göstər
if ($conn->connect_error) {
    die("Bağlantı xətası: " . $conn->connect_error);
} else {
    echo "MySQL serverinə uğurla qoşuldunuz!";
}

// Bağlantını bağlamaq üçün istifadə olunur (istəyə bağlıdır, lakin yaxşı təcrübədir)
$conn->close();
