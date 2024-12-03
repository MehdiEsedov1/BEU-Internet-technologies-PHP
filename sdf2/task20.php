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
$servername = "localhost";
$username = "root";
$password = "";
$database = "sdf2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı uğursuz oldu: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search"])) {
    $searchTerm = $_POST["search"];
    $searchTerm = "%" . $searchTerm . "%";

    $sql = "SELECT * FROM user WHERE name LIKE '$searchTerm' OR surname LIKE '$searchTerm'";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Name</th><th>Surname</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["surname"]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='color: red;'>Heç bir nəticə tapılmadı.</p>";
    }
}

$conn->close();
?>

</body>
</html>
