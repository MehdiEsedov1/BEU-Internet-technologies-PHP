<?php
$username = "root";
$password = "";
$servername = "localhost";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die($conn->connect_error);
}

$query = "SELECT id, name, surname FROM usersinfo";

$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Surname</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['surname'] . "</td>";
    echo "</tr>";
}

echo "</table>";

$stmt->close();
$conn->close();
