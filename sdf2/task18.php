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

$servername = "localhost";
$username = "root";
$password = "";
$database = "sdf2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı uğursuz oldu: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = intval($_POST["id"]);

    $name = $_POST["name"];
    $surname = $_POST["surname"];

    $sql = "UPDATE user SET name = '$name', surname = '$surname' WHERE id = $id";

    if ($conn->query($sql) === true) {
        echo "<p style='color: green;'>Məlumatlar uğurla yeniləndi!</p>";
    } else {
        echo "<p style='color: red;'>Xəta baş verdi: " . $conn->error . "</p>";
    }
}

$conn->close();
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
