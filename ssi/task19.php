<?php
$mysqli = new mysqli("localhost", "root", "", "testdb");

if ($mysqli->connect_error) {
    die("Bağlantı uğursuz oldu: " . $mysqli->connect_error);
}

$query_inner = "
    SELECT users.id, users.name, orders.product_name
    FROM users
    INNER JOIN orders
    ON users.id = orders.user_id
    ORDER BY orders.total_amount DESC;
";

$query_left = "
    SELECT users.id, users.name, orders.product_name
    FROM users
    LEFT JOIN orders
    ON users.id = orders.user_id
    ORDER BY orders.total_amount DESC;
";

// INNER JOIN sorğusu üçün stmt
$stmt_inner = $mysqli->prepare($query_inner);
$stmt_inner->execute();
$result_inner = $stmt_inner->get_result();

// LEFT JOIN sorğusu üçün stmt
$stmt_left = $mysqli->prepare($query_left);
$stmt_left->execute();
$result_left = $stmt_left->get_result();

if (!$result_inner || !$result_left) {
    die("Sorğu xətası: " . $mysqli->error);
}

// INNER JOIN nəticəsi
echo "INNER JOIN Nəticəsi:<br>";
while ($row = $result_inner->fetch_assoc()) {
    echo $row['id'] . " - " . $row['name'] . " - " . $row['product_name'] . "<br>";
}

echo "<br>LEFT JOIN Nəticəsi:<br>";
while ($row = $result_left->fetch_assoc()) {
    echo $row['id'] . " - " . $row['name'] . " - " . ($row['product_name'] ?? 'NULL') . "<br>";
}

$stmt_inner->close();
$stmt_left->close();
$mysqli->close();
?>
