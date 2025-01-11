<?php
$filedic = "./example.txt";

if (file_exists($filedic)) {
    $file = fopen($filedic, "r");

    while (!feof($file)) {
        $file_line = fgets($file);

        echo $file_line;
    }

    fclose($file);
} else {
    echo "Fayl mövcud deyil.";
}
