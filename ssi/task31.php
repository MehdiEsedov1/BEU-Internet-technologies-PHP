<?php
$dir = "test.txt";

if (file_exists($dir)) {
    $file = fopen($dir, "a");

    fwrite($file, "\ntext elave edildi");

    fclose($file);
    echo "Məlumat faylın sonuna əlavə edildi.";
} else {
    echo "Fayl mövcud deyil.";
}
