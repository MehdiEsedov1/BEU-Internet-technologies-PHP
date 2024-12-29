<?php

// 1. Aritmetik Operatorlar
$a = 10;
$b = 5;
echo "Aritmetik Operatorlar:<br>";
echo "Toplama: " . ($a + $b) . "<br>"; // 10 + 5 = 15
echo "Çıxma: " . ($a - $b) . "<br>"; // 10 - 5 = 5
echo "Vurma: " . ($a * $b) . "<br>"; // 10 * 5 = 50
echo "Bölmə: " . ($a / $b) . "<br>"; // 10 / 5 = 2
echo "Qalıq: " . ($a % $b) . "<br>"; // 10 % 5 = 0

// 2. Müqayisə Operatorları
echo "<br>Müqayisə Operatorları:<br>";
var_dump($a == $b); // false (bərabərlik)
var_dump($a != $b); // true (bərabərsizlik)
var_dump($a > $b); // true (böyükdür)
var_dump($a < $b); // false (kiçikdir)
var_dump($a >= $b); // true (böyük və ya bərabərdir)
var_dump($a <= $b); // false (kiçik və ya bərabərdir)

// 3. Loqik Operatorlar
echo "<br>Loqik Operatorlar:<br>";
var_dump($a > $b && $a < 20); // true (və operatoru)
var_dump($a > $b || $a < 3); // true (və ya operatoru)
var_dump(!$a == $b); // true (not operatoru)

// 4. Bitwise Operatorlar
echo "<br>Bitwise Operatorlar:<br>";
echo "AND: " . ($a & $b) . "<br>"; // 10 & 5 = 0
echo "OR: " . ($a | $b) . "<br>"; // 10 | 5 = 15
echo "XOR: " . ($a ^ $b) . "<br>"; // 10 ^ 5 = 15

// 5. Təyin Etmə Operatorları
echo "<br>Təyin Etmə Operatorları:<br>";
$a += 5; // $a = $a + 5
echo "Yeni $a: " . $a . "<br>"; // 15

// 6. PHP date() funksiyası

// Cari tarix formatı: "Y-m-d"
echo "<br>PHP date() funksiyası:<br>";
echo "Cari tarix (Y-m-d formatı): " . date("Y-m-d") . "<br>"; // 2024-12-29

// Cari vaxt formatı: "H:i:s"
echo "Cari vaxt (H:i:s formatı): " . date("H:i:s") . "<br>"; // 15:23:50

// Şu anki tarix və saat formatı: "d/m/Y H:i:s"
echo "Tarix və saat (d/m/Y H:i:s formatı): " . date("d/m/Y H:i:s") . "<br>"; // 29/12/2024 15:23:50

// Unix zaman damgası ilə tarix göstərmək
$timestamp = 1609459200; // 01-01-2021 00:00:00
echo "Unix timestamp ilə tarix: " . date("d-m-Y H:i:s", $timestamp) . "<br>"; // 01-01-2021 00:00:00

// strtotime() funksiyası ilə tarix manipulyasiyası
$timestamp_from_string = strtotime("2024-12-29");
echo "strtotime() ilə tarix: " . date("d-m-Y", $timestamp_from_string) . "<br>"; // 29-12-2024
