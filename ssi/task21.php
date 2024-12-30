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

// 5. Təyin Etmə Operatorları
echo "<br>Təyin Etmə Operatorları:<br>";
$a += 5; // $a = $a + 5
echo "Yeni $a: " . $a . "<br>"; // 15
echo "<br>";

// php kodlarinin hansi saat qursagina gore islemesini bildirmek ucun

date_default_timezone_set("Asia/Baku");

$gun = date("d");
$ay = date("m");
$il = date("Y");
$saat = date("H");
$deqiqe = date("i");
$saniye = date("s");
$day_of_week = date("l");
$month = date("F");

echo $saat;
echo "<br>";
echo $gun;
echo "<br>";
echo $il;
echo "<br>";
echo $ay;
echo "<br>";
echo $deqiqe;
echo "<br>";
echo $saniye;
echo "<br>";
echo $day_of_week;
echo "<br>";
echo $month;
echo "<br>";

// date-de istediyimiz zamani saniye ile tapmaq
echo date("Y-m-d", 1232412343);
echo "<br>";

// bir saat onceki zaman
echo date("H:i:s", time() - 60 * 60);
echo "<br>";

// mktime() ile de zaman yaratmaq olar
$add = mktime(12, 20, 40, 10, 21, 1995);
echo date("Y-m-d", $add);
echo "<br>";

// strtotime daha oxunaqli tarixi Unix timestamp-a cevirmek ucundur;
$d = strtotime("11:20pm April 18 2019");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br>";

// getdate()
$date = getdate();
print_r($date);
echo "$date[year], $date[month]";
echo "<br>";

// checkdate() hemin tarixin olub olmadigini yoxlayir;
var_dump(checkdate(2, 29, 2003));
echo "<br>";

var_dump(checkdate(2, 29, 2004));
echo "<br>";
