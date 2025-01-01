<?php
// $arr = [1, 2, 3, 4, 5, 6];
// $first_element = array_shift($arr);
// array_push($arr, $first_element);

$arr = [1, 2, 3, 4, 5, 6];
$length = count($arr);
$first_element = $arr[0];

for ($i = 0; $i < $length - 1; $i++) {
    $arr[$i] = $arr[$i + 1];
}

$arr[$length - 1] = $first_element;

print_r($arr);
