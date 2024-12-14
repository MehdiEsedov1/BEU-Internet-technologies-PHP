<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <h1>Şifrəni Dəyişdir</h1>
    <form action="change_password.php" method="POST">
        <label for="old_password">Əvvəlki Şifrə:</label>
        <input type="password" id="old_password" name="old_password" required><br>

        <label for="new_password">Yeni Şifrə:</label>
        <input type="password" id="new_password" name="new_password" required><br>

        <button type="submit">Şifrəni Dəyişdir</button>
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sdf2";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Bağlantı uğursuz oldu: " . $conn->connect_error);
    }

    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    $myQuery = "SELECT password FROM user WHERE id = 1";
    $result = $conn->query($myQuery);
    $row = $result->fetch_assoc();

    if (password_verify($old_password, $row['password'])) {
        $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

        $myQuery = "UPDATE user SET password = '$new_password_hash' WHERE id = 1";

        if ($conn->query($myQuery) === true) {
            echo "Şifrə uğurla dəyişdirildi!";
        } else {
            echo "Şifrəni dəyişdirərkən xəta baş verdi: " . $conn->error;
        }
    } else {
        echo "Əvvəlki şifrə səhvdir!";
    }

    $conn->close();
}
?>
</body>
</html>
