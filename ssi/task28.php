<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["radio"])) {
        echo "Seçilmiş radio düymə dəyəri: " . htmlspecialchars($_POST["radio"]);
    } else {
        echo "Heç bir radio düymə seçilməyib.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button Form</title>
</head>
<body>
    <form method="post">
        <label>
            <input type="radio" name="radio" value="1"> 1
        </label><br>
        <label>
            <input type="radio" name="radio" value="2"> 2
        </label><br>
        <label>
            <input type="radio" name="radio" value="3"> 3
        </label><br>
        <button type="submit">Göndər</button>
    </form>
</body>
</html>
