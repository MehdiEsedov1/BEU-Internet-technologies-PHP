<?php
$number = 12342;
$state = false;

while ($number > 0) {
    $x = $number % 10;
    $number_tmp = (int) ($number / 10);

    while ($number_tmp > 0) {
        if ($x == $number_tmp % 10) {
            $state = true;
            break 2;
        }
        $number_tmp = (int) ($number_tmp / 10);
    }

    $number = (int) ($number / 10);
}

echo $state ? "bəli" : "xeyr";
