<?php
$conn = mysqli_connect("localhost", "root", "", "testdb");
if (!$conn) {
    die("Bağlantı xətası: " . mysqli_connect_error());
}

$query = "SELECT users.name, users.email, orders.total_amount
          FROM users
          INNER JOIN orders ON users.id = orders.user_id
          ORDER BY orders.total_amount DESC"; // Azalan sıralama

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Ad: " . $row["name"] . " - Email: " . $row["email"] . " - Ümumi məbləğ: " . $row["total_amount"] . "<br>";
    }
} else {
    echo "Heç bir nəticə tapılmadı.";
}

mysqli_close($conn);
