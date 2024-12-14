<?php
$file_path = "C:/Users/SWORD 15/Desktop/text.txt";

$file = fopen($file_path, "a");

if ($file) {
    fwrite($file, "\ntext added");

    fclose($file);
}
