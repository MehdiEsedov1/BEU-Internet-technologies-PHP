<?php
$sum = 0;
$num = 153;
$tmp_num = $num;
$subnum = 0;

while ($num > 0) {
    $subnum = $num % 10;
    $sum += $subnum * $subnum * $subnum;
    $num = (int) ($num / 10);
}

echo $sum == $tmp_num ? "Yes" : "No";
