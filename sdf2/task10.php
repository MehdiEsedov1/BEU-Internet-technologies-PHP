<?php
$file_path = "C:/Users/YourUsername/Desktop/text.txt";

$file = fopen($file_path, "r");

if ($file) {
    $first_char = fgetc($file);
    echo "Faylın ilk simvolu: " . $first_char;

    fclose($file);
} else {
    echo "Fayl açıla bilmədi!";
}
