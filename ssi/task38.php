<?php
$dsn = "mysql:host=localhost;dbname=users;charset=utf8mb4";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM usersinfo";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Surname</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['surname'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    echo "Xəta: " . $e->getMessage();
}
