<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cədvəl Məlumatları</title>
</head>
<body>
    <h1>Cədvəl Məlumatları</h1>
    <?php
        // Verilənlər bazası bağlantısı
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "sdf2";

        $conn = new mysqli($servername, $username, $password, $database);

        // Bağlantını yoxla
        if ($conn->connect_error) {
            die("Bağlantı uğursuz oldu: " . $conn->connect_error);
        }

        // SQL sorğusu
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);

        if ($result) {
            // Sətirləri göstər
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            echo "<tr><th>ID</th><th>Name</th><th>Surname</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["surname"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            // Sətir sayını göstər
            $rowCount = $result->num_rows;
            echo "<p><strong>Cədvəldəki sətirlərin sayı:</strong> $rowCount</p>";
        } else {
            echo "<p style='color: red;'>Xəta baş verdi: " . $conn->error . "</p>";
        }

        $conn->close();
    ?>
</body>
</html>
