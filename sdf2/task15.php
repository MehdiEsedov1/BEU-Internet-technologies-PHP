<?php
// Verilənlər bazasına qoşulma
$servername = "localhost";
$username = "root"; // MySQL istifadəçi adı
$password = ""; // MySQL şifrəsi
$dbname = "test_db"; // Verilənlər bazasının adı

// Bağlantını yarat
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı yoxlanışı
if ($conn->connect_error) {
    die("Bağlantı xətası: " . $conn->connect_error);
}

// Form məlumatları ilə işləmək
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gələn məlumatları al
    $username = $_POST['username'];
    $password = $_POST['parol'];

    // Şifrəni şifrələyin
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL sorğusunu yazın
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    // Sorğunu icra edin və yoxlayın
    if ($conn->query($sql) === true) {
        echo "Məlumat uğurla əlavə olundu!";
    } else {
        echo "Xəta: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İstifadəçi Daxilatı</title>
</head>
<body>
    <h2>İstifadəçi Qeydiyyat Forması</h2>

    <!-- İstifadəçi adı və şifrəni daxil etmək üçün form -->
    <form action="index.php" method="POST">
        <label for="username">İstifadəçi adı:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="parol">Şifrə:</label>
        <input type="password" id="parol" name="parol" required><br><br>

        <input type="submit" value="Qeydiyyat">
    </form>
</body>
</html>
