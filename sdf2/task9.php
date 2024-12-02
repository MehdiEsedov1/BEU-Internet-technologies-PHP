<?php
$file_path = "C:/Users/YourUsername/Desktop/text.txt";

$file = fopen($file_path, "r");

if ($file) {
    $first_line = fgets($file);
    echo "Faylın ilk sətri: " . $first_line;

    fclose($file);
} else {
    echo "Fayl açıla bilmədi!";
}
