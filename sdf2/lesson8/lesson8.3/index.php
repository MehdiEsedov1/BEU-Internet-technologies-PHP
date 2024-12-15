<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "dbname";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Error: " . mysqli_connect_error());
}

if (isset($_POST['search'])) {

    $userInput = $_POST['user_input'];

    // Using prepared statements to prevent SQL Injection
    $sql = "SELECT * FROM tablename WHERE first_name = ?";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $userInput);

    if (!mysqli_stmt_execute($stmt)) {
        echo "Query Error: " . mysqli_stmt_error($stmt);
    } else {
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "Username: " . htmlspecialchars($row['first_name']) . "<br>";
        }
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Prevention</title>
</head>
<body>
    <form method="post" action="">
        <label for="user_input">Username:</label><br>
        <input type="text" id="user_input" name="user_input"><br><br>
        <input name="search" type="submit" value="Search">
    </form>
</body>
</html>
