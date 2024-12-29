<?php
$file = "example.txt";

// 1. Faylın yaradılmasını təmin edir və ya zamanını yeniləyir
if (touch($file)) {
    echo "Faylın vaxtı yeniləndi və ya fayl yaradıldı.\n";
} else {
    echo "Fayl yaratmaq mümkün olmadı.\n";
}

// 2. Faylı yazmaq üçün açır
$fileHandle = fopen($file, "w");

if ($fileHandle) {
    // 3. Fayla məlumat yazır
    fwrite($fileHandle, "PHP-də fayl idarəetməsi.\n");
    fwrite($fileHandle, "PHP-də fayl idarəetməsi.\n");
    fwrite($fileHandle, "PHP-də fayl idarəetməsi.\n");
    fwrite($fileHandle, "PHP-də fayl idarəetməsi.\n");

    // 4. Faylı bağlayır
    fclose($fileHandle);
    echo "Məlumat fayla yazıldı.\n";
} else {
    echo "Fayl açıla bilmədi.\n";
}
