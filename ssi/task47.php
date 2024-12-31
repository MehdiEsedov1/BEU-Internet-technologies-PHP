<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "root";
    $password = "";
    $servername = "localhost";
    $dbname = "users";

    $surname = $_POST["surname"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT user FROM usersinfo WHERE surname = ?";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "s", $surname);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "User: " . htmlspecialchars($row['user']) . "<br>";
        }
    } else {
        echo "No users found with the surname: " . htmlspecialchars($surname);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Search</title>
</head>
<body>
    <form method="post">
        <input type="text" name="surname" placeholder="Enter surname">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
