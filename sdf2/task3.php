<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email və Parol Yoxlama</title>
</head>
<body>
    <h1>Email və Parol Yoxlama</h1>

    <?php
$adminEmail = "someone@mail.ru";
$adminPassword = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === $adminEmail && $password === $adminPassword) {
        echo "<p style='color: green;'>Uğurlu!</p>";
    } else {
        echo "<p style='color: red;'>Yanlış!</p>";
    }
}
?>

    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="password">Parol:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Yoxla</button>
    </form>
</body>
</html>
