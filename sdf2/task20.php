<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sadə Axtarış</title>
</head>
<body>
    <h1>Sadə Axtarış</h1>
    <form action="" method="POST">
        <label for="search">Axtarılacaq söz:</label>
        <input type="text" id="search" name="search" required>
        <button type="submit">Axtar</button>
    </form>
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search"])) {
    $searchTerm = $_POST["search"];
    $searchTerm = $conn->real_escape_string($searchTerm); // SQL injection qarşısını almaq üçün

    // SQL sorğusu
    $sql = "SELECT * FROM user WHERE name LIKE ? OR surname LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%" . $searchTerm . "%"; // Axtarılacaq sözü əlavə et
    $stmt->bind_param("ss", $searchTerm, $searchTerm); // İki dəfə "ss" çünki "name" və "surname" sütunları stringdir

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Name</th><th>Surname</th></tr>";

        // Nəticələri göstər
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["surname"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='color: red;'>Heç bir nəticə tapılmadı.</p>";
    }

    $stmt->close(); // Sorğunu bağla
}

$conn->close(); // Bağlantını bağla
?>

</body>
</html>
