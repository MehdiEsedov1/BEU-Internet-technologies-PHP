<?php
// PHP kodu şəkil yükləməsi və təhlükəsizlik yoxlamaları üçün
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Şəkil yüklənərkən istifadə ediləcək qovluq
    $target_dir = "uploads/"; // Şəkillərin saxlanılacağı qovluq
    $target_file = $target_dir . basename($_FILES["image"]["name"]); // Faylın tam yolu
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Faylın tipi (uzantısı)

    // Şəkil faylının düzgün olub-olmamasını yoxlayaq
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            echo "Fayl bir şəkil faylıdır - " . $check["mime"] . ".<br>";
        } else {
            echo "Fayl bir şəkil deyil.<br>";
            exit();
        }
    }

    // Faylın ölçüsünün 5MB-dan böyük olmaması
    if ($_FILES["image"]["size"] > 5000000) { // 5MB
        echo "Üzr istəyirik, fayl çox böyükdür.<br>";
        exit();
    }

    // Yalnız şəkil formatlarına icazə verilir
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Üzr istəyirik, yalnız JPG, JPEG, PNG və GIF fayllarına icazə verilir.<br>";
        exit();
    }

    // Faylın artıq mövcud olub-olmaması yoxlanır
    if (file_exists($target_file)) {
        echo "Fayl artıq mövcuddur.<br>";
        exit();
    }

    // Faylın yüklənməsi
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "Fayl " . htmlspecialchars(basename($_FILES["image"]["name"])) . " uğurla yükləndi.<br>";
    } else {
        echo "Üzr istəyirik, fayl yüklənərkən bir xəta baş verdi.<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şəkil Yükləmə</title>
</head>
<body>
    <h2>Şəkil Yükləmək</h2>
    <!-- HTML formu şəkil yükləmək üçün -->
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="image">Şəkil Seçin:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br><br>
        <input type="submit" name="submit" value="Şəkil Yüklə">
    </form>
</body>
</html>
