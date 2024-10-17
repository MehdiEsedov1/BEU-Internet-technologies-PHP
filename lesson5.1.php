<?php

# GET methodu ile gonderilen datalarin islenmesi
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    echo "GET ile gelen ad: " . htmlspecialchars($name); // XSS qorunması üçün htmlspecialchars() istifadə edilir
}

# POST methodu ile gonderilen datalarin islenmesi
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo "POST ile gelen ad: " . htmlspecialchars($name); // XSS qorunması üçün htmlspecialchars() istifadə edilir
}

?>

<!-- GET methodu -->
<form action="" method="get">
    <input type="text" name="name" placeholder="Adınızı daxil edin"> <!-- value silindi -->
    <input type="submit" name="submit" value="Göndər">
</form>

<!-- POST methodu -->
<form action="" method="post">
    <input type="text" name="name" placeholder="Adınızı daxil edin"> <!-- value silindi -->
    <input type="submit" name="submit" value="Göndər">
</form>
