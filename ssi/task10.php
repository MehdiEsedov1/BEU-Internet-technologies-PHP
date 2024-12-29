<?php
// Faylın yolunu müəyyən edirik
$filedic = "./example.txt";

// Faylın mövcudluğunu yoxlayırıq
if (file_exists($filedic)) {
    // Faylı oxumaq üçün açırıq (r - read: oxumaq üçün açmaq)
    $file = fopen($filedic, "r");

    // Faylın sonuna çatmamışıqsa, faylın hər bir sətirini oxuyuruq
    while (!feof($file)) {
        // Fayldan bir sətir oxuyuruq
        $file_line = fgets($file);

        // Oxunan sətiri ekrana yazdırırıq
        echo $file_line;
    }

    // Faylı bağlayırıq (istifadə etdikdən sonra fayl bağlanmalıdır)
    fclose($file);
} else {
    // Fayl mövcud deyilsə, xəbərdarlıq mesajı göstəririk
    echo "Fayl mövcud deyil.";
}
