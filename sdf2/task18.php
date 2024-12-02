<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verilənləri Yenilə</title>
</head>
<body>
    <h1>Verilənləri Yenilə</h1>
    <?php
// Verilənlər bazası bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$database = "sdf2";

$conn = new mysqli($servername, $username, $password, $database);

// Bağlantını yoxla
if ($conn->connect_error) {
    die("Bağlantı uğursuz oldu: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST["id"]); // ID-ni tam ədədə çevir
    $name = $_POST["name"];
    $surname = $_POST["surname"];

    // SQL sorğusu
    $sql = "UPDATE user SET name = ?, surname = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    // Sorğunun düzgün hazırlanıb-hazırlanmadığını yoxla
    if (!$stmt) {
        die("SQL sorğusu hazırlana bilmədi: " . $conn->error);
    }

    // Parametrləri əlavə et
    $stmt->bind_param("ssi", $name, $surname, $id);

    // Sorğunu icra et
    if ($stmt->execute()) {
        echo "<p style='color: green;'>Məlumatlar uğurla yeniləndi!</p>";
    } else {
        echo "<p style='color: red;'>Xəta baş verdi: " . $stmt->error . "</p>";
    }

    $stmt->close(); // Sorğunu bağla
}

$conn->close(); // Bağlantını bağla
?>

    <form action="" method="POST">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required><br><br>

        <label for="name">Ad:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="surname">Soyad:</label>
        <input type="text" id="surname" name="surname" required><br><br>

        <button type="submit">Yenilə</button>
    </form>
</body>
</html>
