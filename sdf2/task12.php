<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="task12.php" method="POST">
        <label for="username">İstifadəçi Adı:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Şifrə:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Göndər">
    </form>
</body>
</html>
