<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $search = $_POST['search'];

    $dsn = "mysql:host=localhost;dbname=users;charset=utf8mb4";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM usersinfo WHERE surname LIKE :search";

        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($results) > 0) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Name</th><th>Surname</th></tr>";

            foreach ($results as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['surname']) . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Heç bir nəticə tapılmadı.</p>";
        }
    } catch (PDOException $e) {
        echo "<p>Xəta: " . $e->getMessage() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Search</title>
</head>
<body>
    <form method="POST" action="">
        <label for="search">Soyad axtar:</label>
        <input type="text" id="search" name="search" required>
        <button type="submit">Axtar</button>
    </form>
</body>
</html>
