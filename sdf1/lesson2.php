<?php

# rand() - random ededler daxil etmek ucun funksiya
$randomNumber = rand(0, 100);

# ------------------------------------------------

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

# date(), time();

# php kodlarinin hansi saat qursagina gore islemesini bildirmek ucun
date_default_timezone_set("Asia/Baku");

$day = date("d");
$mounth = date("m");
$year = date("Y");
$hour = date("H");
$minute = date("i");
$second = date("s");
$dayOfMonth = date("l");
$nameOfMounth = date("F");

# date-de istediyimiz zamani saniye ile tapmaq
echo date("Y-m-d", 1232412343);

# bir saat onceki zaman
echo date("H:i:s", time() - 60 * 60);

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
