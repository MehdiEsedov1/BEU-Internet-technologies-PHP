<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "Ad: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email);
}
