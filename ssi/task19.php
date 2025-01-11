<?php
$mysqli = new mysqli("localhost", "root", "", "testdb");

if ($mysqli->connect_error) {
    die("Bağlantı uğursuz oldu: " . $mysqli->connect_error);
}

$query = "
    SELECT users.id, users.name, orders.product_name
    FROM users
    INNER JOIN orders
    ON users.id = orders.user_id
    ORDER BY orders.total_amount DESC;
";

$stmt = $mysqli->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

if (!$result) {
    die("Sorğu xətası: " . $mysqli->error);
}

while ($row = $result->fetch_assoc()) {
    echo $row['id'] . " - " . $row['name'] . " - " . $row['product_name'] . "<br>";
}

$stmt->close();
$mysqli->close();
