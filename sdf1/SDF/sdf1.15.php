<?php
if (isset($_POST["submit"])) {
    $radio = $_POST["radio"];
    echo $radio;
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
    <form action="" method="post">
        <input type="radio" name="radio" value="1">
        <input type="radio" name="radio" value="2">
        <input type="radio" name="radio" value="3">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
