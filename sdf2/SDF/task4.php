<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Məlumatlarını Filtr Et</title>
</head>
<body>
    <h1>Form Məlumatlarını Filtr Et</h1>
    <?php
function validate($data, $type = 'string')
{
    $data = trim($data);

    if ($type === 'email') {
        return filter_var($data, FILTER_VALIDATE_EMAIL) ? $data : false;
    } elseif ($type === 'int') {
        return filter_var($data, FILTER_VALIDATE_INT) ? $data : false;
    }

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = validate($_POST["email"], 'email');
    $name = validate($_POST["name"], 'string');

    if ($email && $name) {
        echo "<p style='color: green;'>Daxil edilmiş məlumatlar düzgündür!</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Ad: $name</p>";
    } else {
        echo "<p style='color: red;'>Məlumatlar düzgün deyil!</p>";
    }
}
?>
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="name">Ad:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <button type="submit">Göndər</button>
    </form>
</body>
</html>
