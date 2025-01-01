<?php
$arr = [];
$num = 54623456;
$i = 0;

while ($num > 0) {
    $arr[$i] = $num % 10;
    $i++;
    $num = (int) ($num / 10);
}

echo $arr[0] + $arr[count($arr) - 1];
