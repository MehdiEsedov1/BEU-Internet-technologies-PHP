<?php
$conn = mysqli_connect("localhost", "root", "", "testdb");

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
    ON users.id = orders.user_id;
    ORDER BY orders.total_amount DESC;
";

$result_inner = mysqli_query($conn, $query_inner);
$result_left = mysqli_query($conn, $query_left);

echo "INNER JOIN Nəticəsi:<br>";
while ($row = mysqli_fetch_assoc($result_inner)) {
    echo $row['id'] . " - " . $row['name'] . " - " . $row['product_name'] . "<br>";
}

echo "<br>LEFT JOIN Nəticəsi:<br>";
while ($row = mysqli_fetch_assoc($result_left)) {
    echo $row['id'] . " - " . $row['name'] . " - " . ($row['product_name'] ?? 'NULL') . "<br>";
}

mysqli_close($conn);
