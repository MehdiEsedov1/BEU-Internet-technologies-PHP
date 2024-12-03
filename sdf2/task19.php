<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cədvəl Məlumatları</title>
</head>
<body>
    <h1>Cədvəl Məlumatları</h1>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sdf2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı uğursuz oldu: " . $conn->connect_error);
}

$myQuery = "SELECT * FROM user";
$result = $conn->query($myQuery);

if ($result) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Name</th><th>Surname</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["surname"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $rowCount = $result->num_rows;
    echo "<p><strong>Cədvəldəki sətirlərin sayı:</strong> $rowCount</p>";
} else {
    echo "<p style='color: red;'>Xəta baş verdi: " . $conn->error . "</p>";
}

$conn->close();
?>
</body>
</html>
