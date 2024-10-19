<?php

//Question 1

// $number = 644;

// $a = (int) ($number % 10);
// $b = (int) (($number % 100) / 10);
// $c = (int) ($number / 100);

// echo "number :" . $number . "<br>" . "sum :" . $a + $b + $c . "<br>" . "product :" . $a * $b * $c . "<br>";

//Question 2,3

// $number = 5126;

// $storedNumber = $number;

// $lastNumber = $number % 10;

// $sum = 0;

// $p = 0;

// while ($number != 0) {
//     $sum += $number % 10;
//     $number = (int) ($number / 10);
//     $p++;
// }

// $firstNumber = (int) ($storedNumber / pow(10, $p - 1));

// echo "sum : " . $sum . "<br>" . "sum of last and first number : " . ($firstNumber + $lastNumber);

//Question 4

// $array = [0, 1, 2, 3, 4, 5];

// $sum = 0;

// for ($i = 0; $i < count($array); $i++) {
//     $sum += $array[$i];
// }

// echo "sum of elements of array : " . $sum . "<br>" . "count of elements : " . count($array);

//Question 6

// $array = [0, 1, 2, 3, 4, 5];

// $resultArray = [];

// for ($i = 1; $i < count($array); $i++) {
//     array_push($resultArray, $array[$i]);
// }

// array_push($resultArray, $array[0]);

// print_r($resultArray);

//Question 7

// $array = [0, 1, 2, 3, 4, 5];

// $resultArray = [];

// array_push($resultArray, $array[count($array) - 1]);

// for ($i = 0; $i < count($array) - 1; $i++) {
//     array_push($resultArray, $array[$i]);
// }

// print_r($resultArray);

//Question 8

// $array = [8, 3, 0, 2, 5, 4, 5, 7, 8, 8, 8, 3, 2, 4, 7, 5, 7, 8, 5, 2, 3, 5];

// $number = $array[0];

// $count = 0;

// for ($n = 1; $n < count($array); $n++) {
//     if ($number < $array[$n]) {
//         $number = $array[$n];
//     }
// }

// for ($n = 0; $n < count($array); $n++) {
//     if ($number == $array[$n]) {
//         $count++;
//     }
// }

//Question 9



// echo "number : " . $number . "<br>" . "count : " . $count;

//Question 10

// $words = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, architecto incidunt est laborum";
// $countOfWords = 1;

// for ($i = 0; $i < strlen($words); $i++) {
//     if ($words[$i] == " ") {
//         $countOfWords++;
//     }
// }

// echo $countOfWords;

//Question 11

// $words = "Lorem ipsum dolor sit amet";
// $firstOne = 0;
// $lastOne = 0;

// for ($i = 0; $i < strlen($words); $i++) {
//     if ($words[$i] == " ") {
//         $firstOne = $i;
//         break;
//     }
// }

// for ($i = 0; $i < strlen($words); $i++) {
//     if ($words[$i] == " ") {
//         $lastOne = $i;
//     }
// }

// echo $firstOne . " " . $lastOne;

//Question 12

// $number0 = 1234324495793;

// $number = 4;

// $count = 0;

// while ($number0 != 0) {
//     if ($number0 % 10 == $number) {
//         $count++;
//     }
//     $number0 = $number0 / 10;
// }

// echo $count;

//Question 13

// $number = 1234;
// $number1 = $number;
// $count = 0;
// $count1 = 0;

// while ($number != 0) {
//     $count = $number % 10; //4

//     while ($number1 != 0) {
//         if ($number1 % 10 == $count) { //4
//             $count1++;
//         }

//         $number1 = $number1 / 10;
//     }
//     $number1 = $number;

//     $number = $number / 10;
// }

// if ($count1 > 2) {
//     echo "True";
// } else {
//     echo "False";
// }
