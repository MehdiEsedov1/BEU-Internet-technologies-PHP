<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['color'])) {
        $selectedColor = $_POST['color'];
        echo $selectedColor;
    } else {
        echo "<p>Rəng seçilməyib!</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rəng Seçici Formu</title>
</head>
<body>
    <form method="POST">
        <input type="color" name="color" value="#000000">
        <input type="submit" value="submit">
    </form>
</body>
</html>
