<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sdf2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Bağlantı uğursuz oldu: " . $conn->connect_error);
}

$sql = "SELECT * FROM user ORDER BY name ASC"; // Ad üzrə artan sıralama
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Surname: " . $row["surname"] . "<br>";
    }
} else {
    echo "Nəticə tapılmadı.";
}

$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sdf2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Bağlantı uğursuz oldu: " . $conn->connect_error);
}

// INNER JOIN nümunəsi
$sql = "SELECT user.name, user.surname, orders.order_date
        FROM user
        INNER JOIN orders ON user.id = orders.user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . " - Surname: " . $row["surname"] . " - Order Date: " . $row["order_date"] . "<br>";
    }
} else {
    echo "Nəticə tapılmadı.";
}

$conn->close();
?>
