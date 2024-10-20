<?php

// Task 1; ayri-ayri verilmis $ad ve $soyadi birlesdirsin, ve altinda ayrica $no yazsin

// $name = "Mehdi";
// $surname = "Asadov";

// $result = $name + $surname;

// $no = 15;

// echo $result . "<br>" . $no;

// ---------------------------------------------------

// Task 2; Stringde olan ifadeleri kicildib, boyuden kod bloku

// $text = "Hello, world !!!";

// function caseChanger($text, $case)
// {
//     if ($case == "Upper") {
//         return strtoupper($text);
//     } elseif ($case == "Lower") {
//         return strtolower($text);
//     } else {
//         return "False case";
//     }
// }

// echo caseChanger($text, "Upper");

// ----------------------------------------------------

// Task 3; Stringi parcalasin

// $text = "Hello, world !!!";
// $explodedText = explode(" ", $text);
// $splitedText = str_split($text, 3);

// print_r($explodedText);
// print_r($splitedText);

// ----------------------------------------------------

// Task 4; Stringde verilmis her hansi bir ifadeni ve ya sozu axtarsin

// $text = "Hello, world!!!";
// $resultText = strpos("Hello", $text);

// echo gettype($resultText);

// -----------------------------------------------------

// Task 5; Verilmis ededin 4 reqemli olub olmadigini yoxlasin, eger eledise onun son ve ilk reqemleri cemini toplayib ekrana cixarsin;

// $number = 5987;

// if ((int) ($number / 10000) < 1 && (int) ($number / 1000) != 0) {
//     echo (int) ($number / 1000) + $number % 10;
// } else {
//     echo "It is bigger than 10000";
// }

// Task 6; Verilmis ededin 100-luk mertebesinde olan reqemi tapin;

// $number = 12336735;

// echo $number / 100 % 10;

// -------------------------------------------------------

// Task 7; verilmis ededde teklik ve onluq reqemlerin yerini deyisin;

// --------------------------------------------------------

// Task 8; Stringde verilen HTML taglarini silen method;

// $htmlText = "<h1>Mehdi<br>Asadov</h1>";
// $cleanText = strip_tags($htmlText);

// echo $cleanText;

// -------------------------------------------------------

// Task 9; Verilmis ededin tipini yoxlayan;

// $variable = "1234";
// $type = gettype($variable);

// if ($type == "integer") {
//     echo "This is integer";
// } elseif ($type == "string") {
//     echo "This is string";
// } else {
//     echo "Type of this variable is " . $type;
// }
?>
