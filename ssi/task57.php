<?php
$num = 457467;
$t = $num % 10;
$o = (int) ($num / 10) % 10;

$result = ($num - $o * 10 - $t) + $t * 10 + $o;

echo $result;
