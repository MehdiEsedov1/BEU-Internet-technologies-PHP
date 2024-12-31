<?php

$dir = "../test.txt";

$file = fopen($dir, "r");

$first_symbol = fgetc($file);

rewind($file);

$first_line = fgets($file);

echo "İlk simvol: " . $first_symbol . "\n";
echo "İlk sətir: " . $first_line;

fclose($file);
