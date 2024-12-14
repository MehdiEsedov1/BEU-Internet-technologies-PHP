<?php

if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    echo "GET ile gelen ad: " . htmlspecialchars($name);
} else {
    echo "Error";
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo "POST ile gelen ad: " . htmlspecialchars($name);
} else {
    echo "Error";
}

?>

<form action="" method="get">
    <input type="text" name="name" placeholder="Adınızı daxil edin">
    <input type="submit" name="submit" value="Göndər">
</form>

<form action="" method="post">
    <input type="text" name="name" placeholder="Adınızı daxil edin">
    <input type="submit" name="submit" value="Göndər">
</form>
