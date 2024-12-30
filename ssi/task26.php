<?php

$file = "test.txt";

if (file_exists($file)) {
    echo "File exists";
} else {
    touch($file);
}
