<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["option"])) {
        echo htmlspecialchars($_POST["option"]);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <select name="option">
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
        <input type="submit" value="submit">
    </form>
</body>
</html>
