<?php

if (isset($_POST["submit"])) {
    foreach ($_POST["checkbox"] as $key => $value) {
        echo $value . "<br>";
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
    <form action="" method="post">
        <input type="checkbox" name="checkbox[]" value="1">
        <input type="checkbox" name="checkbox[]" value="2">
        <input type="checkbox" name="checkbox[]" value="3">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
