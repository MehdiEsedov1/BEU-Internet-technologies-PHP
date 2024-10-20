<?php

# if,else, elseif-in izahi
#rand() - random ededler daxil etmek ucun funksiya;
# 0 ile 100 arasi random bir ededi ekrana cixarsin ve eger bu eded 50den kicik olarsa, verilmis sertlere uygun olaraq emeliyyatlari icra etsin;

$randomNumber = rand(0, 100);

echo $randomNumber;

echo "<br>";

if ($randomNumber < 50) {
    echo "F";
} elseif ($randomNumber >= 50 && $randomNumber <= 80) {
    echo "B";
} else {
    echo "A";
}

# ------------------------------------------------

# switch-case-de en sonda break yazilmir

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "red";
        break;
    case "blue":
        echo "blue";
        break;
    case "green":
        echo "green";
        break;
    default:
        echo "Favorit rengin hec biri deyil";
}

# ---------------------------------------------

# do...while. Sertden asili olmayaraq mutleq bir defe icra olunur;

$count = 7;

do {
    echo "<br>";
    echo "Bu, taskin $count addimidir";
    echo "<br>";
    $count++;
} while ($count <= 10);

echo "Task tamamlandi." . "<br>";

# ---------------------------------------------------------------

# while;

$counter = 4;

while ($counter <= 5) {
    echo "Bu, taskin $counter addimidir";
    echo "<br>";
    $counter++;
}

echo "Task tamamlandi." . "<br>";

# ---------------------------------------------------------------

# for;

for ($i = 3; $i <= 5; $i++) {
    echo "Bu, taskin $i addimidir";
    echo "<br>";
}

echo "Task tamamlandi." . "<br>";

# -------------------------------------------------

# date(), time();

date_default_timezone_set("Asia/Baku"); # php kodlarinin hansi saat qursagina gore islemesini bildirmek ucun;

$day = date("d");
$mounth = date("m");
$year = date("Y");
$hour = date("H");
$minute = date("i");
$second = date("s");
$dayOfMonth = date("l");
$nameOfMounth = date("F");

echo $hour;
echo "<br>";
echo $day;
echo "<br>";
echo $year;
echo "<br>";
echo $mounth;
echo "<br>";
echo $minute;
echo "<br>";
echo $second;
echo "<br>";
echo $dayOfMounth;
echo "<br>";
echo $nameOfMounth;

echo date("Y-m-d", 1232412343); # date-de istediyimiz zamani saniye ile tapmaq

echo date("H:i:s", time() - 60 * 60); # bir saat onceki zaman

# mktime() ile de zaman yaratmaq olar

$add = mktime(12, 20, 40, 10, 21, 1995);

echo date("Y-m-d", $add);

# ------------------------------------------

# strtotime daha oxunaqli tarixi Unix timestamp-a cevirmek ucundur;

$d = strtotime("11:20pm April 18 2019");
echo date("Y-m-d h:i:sa", $d);

# -------------------------------------------

# strtotime (daha cox login ucun istifade olunur);

$tarix = strtotime("+1 day", time());
echo date("Y-m-d", $tarix);

# -----------------------------------------

# getdate()

$date = getdate();
print_r($date);
echo "<br>";
echo "$date[year], $date[month]";

# -----------------------------------------

# checkdate() hemin tarixin olub olmadigini yoxlayir;

var_dump(checkdate(2, 29, 2003));
echo "<br>";
var_dump(checkdate(2, 29, 2004));

# -----------------------------------------
