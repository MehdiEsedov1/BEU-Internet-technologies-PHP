<?php
$dir = "test.txt";

if (file_exists($dir)) {
    $file = fopen($dir, "w");

    fwrite($file, "text elave edildi");

    fclose($file);
}
