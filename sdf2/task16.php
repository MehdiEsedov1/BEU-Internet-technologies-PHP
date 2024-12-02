<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sdf2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı xətası: " . $conn->connect_error);
}

$sql = "SELECT name, surname FROM user";
$result = $conn->query($sql);

echo "<table border='1'>
        <tr>
            <th>Name</th>
            <th>Surname</th>
        </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row["name"]) . "</td>
                <td>" . htmlspecialchars($row["surname"]) . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='2'>Məlumat yoxdur</td></tr>";
}

echo "</table>";

$conn->close();
