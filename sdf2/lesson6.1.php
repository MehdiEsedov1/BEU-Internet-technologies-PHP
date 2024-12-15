<?php

# readline() - file daxilindeki melumatlari cap edir, en sonda simvol sayini verir

# touch() - file yaratmaq ucundur

# is_file() - file olub olmamasini yoxlayir, directory yox

# file_exists() - file movcud olub olmadigini yoxlayir, directory de yoxlayir

# fopen() - file acmaq ve ya yaratmaq ucun

# fwrite() - file daxiline yazmaq ucun

# fclose() - file baglamaq ucun

# unlink() - file silmek ucun

# feof() - file sonunu gosterir

# glob() - file axtarmaq ucun

# mkdir() - directory yaratmaq ucun

# rmdir() - directory silmek ucun

# fgets() - setri almaq ucun

# fgetc() - simbol almaq ucun

# ---------------------------------------------------

$txt = "test.txt";

if (is_file($txt)) {
    echo "file exits";
} else {
    echo "the file is getting ready";
    touch("test.txt");
}

# ------------------------------------------------------

$txt = "test.txt";

if (file_exists($txt)) {
    echo "the file exists";
} else {
    $openedTxt = fopen($txt, "a");
    fwrite($openedTxt, "Hello, World!!!");
    fclose($openedTxt);

    echo "The file has been created!";
}

# ----------------------------------------------------

$files = glob("C:\\Users\\User\\Desktop\\*.txt");

foreach ($files as $key => $value) {
    $open = fopen($value, "a");

    fwrite($open, "Hello, World!!! \n");
    fclose($open);
}

# --------------------------------------------------

$file = "test.txt";
$read = fopen($file, "r");

while (!feof($read)) {
    $char = fgetc($read);
    echo $char;
    echo "<br>";
}

# --------------------------------------------------

$file = "C:\Users\User\Desktop\test.txt";

$txtfile = fopen($file, "r");

if (is_file($file)) {
    $txtfile = fopen($file, "a");

    fwrite($txtfile, "Hello, World!!!");
    fclose($txtfile);
}

# --------------------------------------------------

$path = "C:\\Users\\User\\Desktop\\*.txt";

$files = glob($path);

if (!$files) {
    echo "Files exists";
} else {
    foreach ($files as $file) {
        echo "File path: $file <br>";
    }
}

# ----------------------------------------------------
