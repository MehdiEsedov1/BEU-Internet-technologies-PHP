<?php
$arr = [1, 2, 9, 8, 9];
$length = count($arr);
$max = $arr[0];
$count = 0;

for ($i = 0; $i < $length; $i++) {
    if ($arr[$i] > $max) {
        $max = $arr[$i];
    }
}

for ($i = 0; $i < $length; $i++) {
    if ($arr[$i] == $max) {
        $count++;
    }
}

echo $max . " " . $count;
