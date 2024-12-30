<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pp = $_FILES['pp'];

    // İcazə verilən fayl formatları və maksimum ölçü
    $allowedFileType = ["image/jpeg", "image/jpg", "image/png"]; // İcazə verilən fayl formatları
    $allowedFileSize = 2 * 1024 * 1024; // Maksimum 2 MB ölçü

    if ($pp['error'] == UPLOAD_ERR_OK) { // Fayl uğurla yüklənibsə
        // Faylın formatını yoxlayırıq
        if (!in_array($pp['type'], $allowedFileType)) {
            die("Fayl növü düzgün deyil!");
        }
        // Faylın ölçüsünü yoxlayırıq
        else if ($allowedFileSize < $pp['size']) {
            die("Fayl ölçüsü 2 MB-dan böyükdür!");
        }

        // Yükləmə qovluğu və fayl adının yaradılması
        $dir = "uploads/"; // Faylın yüklənəcəyi qovluq
        $file = uniqid() . "-" . basename($pp['name']); // Unikal ad yaradılır
        $upload_where = $dir . $file; // Tam yol yaradılır

        // Əgər qovluq yoxdursa, yaradılır
        if (!is_dir($dir)) {
            mkdir($dir);
        }

        // Faylın yüklənməsi
        move_uploaded_file($pp['tmp_name'], $upload_where);
    } else {
        die("<div class='alert alert-danger'>Fayl yüklənmədi!</div>");
    }
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
