<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şəkil Yüklə</title>
</head>
<body>
    <h1>JPEG Formatında Şəkil Yüklə</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="image">Şəkil Seçin:</label>
        <input type="file" name="image" id="image" accept="image/jpeg" required><br>
        <button type="submit">Yüklə</button>
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    if ($_FILES["image"]["size"] > 2 * 1024 * 1024) {
        echo "e";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "s";
        } else {
            echo "s";
        }
    }
}
?>
</body>
</html>
