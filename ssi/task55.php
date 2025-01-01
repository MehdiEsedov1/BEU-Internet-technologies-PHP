<?php

$num = 3;
$sum = 0;
$add = 2;

for ($i = 0; $i < $num; $i++) {
    $sum += $add;
    $add = ($add * 10) + 2;
}

echo $sum;
