<?php
$file_path = "C:/Users/YourUsername/Desktop/text.txt";

$file = fopen($file_path, "w");

if ($file) {
    fwrite($file, "text added");

    fclose($file);
}
