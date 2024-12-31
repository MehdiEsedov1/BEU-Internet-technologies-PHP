<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dsn = "mysql:host=localhost;dbname=users;charset=utf8mb4";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $surname = $_POST["surname"];

        $query = "SELECT user FROM usersinfo WHERE surname = ?";
        $stmt = $pdo->prepare($query);

        $stmt->execute([$surname]);

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($users) {
            foreach ($users as $user) {
                echo "User: " . $user['user'] . "<br>";
            }
        } else {
            echo "No users found with the surname: " . htmlspecialchars($surname);
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "It is not a POST request";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Users</title>
</head>
<body>
    <form method="post">
        <input type="text" name="surname" placeholder="Enter surname">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
