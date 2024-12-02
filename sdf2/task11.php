<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $expiry_time = time() + 600;

    setcookie('username', $username, $expiry_time, '/');
    setcookie('password', $password, $expiry_time, '/');
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
    <form action="task11.php" method="POST">
        <label for="username">İstifadəçi Adı:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Şifrə:</label>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="send">
    </form>
</body>
</html>
