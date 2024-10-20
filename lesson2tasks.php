<?php

# Task 1. verilmis edede qeder olan ededleri cemleyin

// $number = 5;
// $sum = 0;

// for ($i = 1; $i <= $number; $i++) {
//     $sum += $i;
// }

// echo $sum;

# -----------------------------------------------------

//Task 2. verilmis ededin reqemleri cemini tapan proqram

// $number = 5234651;
// $sum = 0;

// while ($number != 0) {
//     $sum += $number % 10;
//     $number = $number / 10;
// }

// echo $sum;

// --------------------------------------------------------------

// Task 3. Verilmis ededin en boyuk reqemini ve nece defe qeyd oldundugunu gosterin.

// $number = 1232345455;
// $number1 = $number;

// $biggestNumber = 0;
// $previousBiggestNumber = 0;

// $count = 0;

// while ($number != 0) {
//     $biggestNumber = $number % 10;

//     if ($biggestNumber > $previousBiggestNumber) {
//         $previousBiggestNumber = $biggestNumber;
//     }

//     $number = $number / 10;
// }

// while ($number1 != 0) {
//     $biggestNumber = $number1 % 10;

//     if ($biggestNumber == $previousBiggestNumber) {
//         $count++;
//     }

//     $number1 = $number1 / 10;
// }

// echo $previousBiggestNumber . "<br>" . $count;

// --------------------------------------------------------

// Task 4. input = 4; output = 2 + 22 + 222 + 2222

// $sum = 0;
// $step = 4;
// $number = 2;

// for ($i = 0; $i < $step; $i++) {
//     $sum += $number;
//     $number = $number * 10 + 2;
// }

// echo $sum;
