<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sətiri Sil</title>
</head>
<body>
    <h1>Sətiri Sil</h1>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "sdf2";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Bağlantı uğursuz oldu: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = intval($_POST["id"]);

            $sql = "DELETE FROM user WHERE id = ?";
            $stmt = $conn->prepare($sql);

            if (!$stmt) {
                die("SQL sorğusu hazırlana bilmədi: " . $conn->error);
            }

            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                echo "<p style='color: green;'>Sətir uğurla silindi!</p>";
            } else {
                echo "<p style='color: red;'>Xəta baş verdi: " . $stmt->error . "</p>";
            }

            $stmt->close();
        }

        $conn->close();
    ?>

    <form action="" method="POST">
        <label for="id">Silinəcək ID:</label>
        <input type="number" id="id" name="id" required>
        <button type="submit">Sətiri Sil</button>
    </form>
</body>
</html>
