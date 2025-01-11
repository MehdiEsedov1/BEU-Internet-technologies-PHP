<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $uploadDir = "uploads/";
    $imageName = basename($_FILES['image']['name']);
    $uploadFile = $uploadDir . $imageName;

    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $fileType = $_FILES['image']['type'];

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "Şəkil uğurla yükləndi: $uploadFile";
        } else {
            echo "Şəkil yüklənərkən xəta baş verdi.";
        }
    } else {
        echo "Yalnız JPEG, PNG və GIF faylları yüklənə bilər.";
    }
} else {
    echo "Şəkil seçilməyib.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şəkil Yükləmə</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input accept="image/*" type="file" id="pp" name="pp" required>
        <input type="submit" value="submit">
    </form>
</body>
</html>
