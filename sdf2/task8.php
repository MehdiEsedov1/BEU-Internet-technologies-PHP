<?php
$file_path = "C:/Users/YourUsername/Desktop/text.txt";

if (!file_exists($file_path)) {
    $file = fopen($file_path, "w");

    if ($file) {
        fwrite($file, "Fayl yaradıldı!\n");

        fclose($file);
        echo "Fayl mövcud deyildi, yeni fayl yaradıldı və ilkin məlumat yazıldı.<br>";
    } else {
        echo "Fayl yaradıla bilmədi!";
        exit();
    }
}

$file = fopen($file_path, "a");

if ($file) {
    fwrite($file, "Bu yeni bir sətrdir: " . "\n");

    fclose($file);
    echo "Fayla yeni məlumat əlavə edildi!";
} else {
    echo "Fayl açıla bilmədi!";
}
