<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
# ----------------------------------------------------------------

# variables

$variable = 'variable';

# -----------------------------------------------------------------

# variable scopes

// local

function test1()
{
    $variable1 = 'local'; # local scope;
}

# local olduğu üçün error verəcək, yalnız function daxilində istifadə oluna bilər;

// echo $variable1;

// global;

$variable2 = 'global';

function test2()
{
    # error verəcək, global keyword-u istifadə olunmalıdır;
    global $variable2;

    echo $variable2 . "\n";
}

// static;

// function daxilində yaradılmış dəyişənin dəyişiklikdən sonra dəyərini qorumaq üçün static keyword-u istifadə olunmalıdır

function test3()
{
    static $variable3 = 0;
    echo $variable3 . "\n";
    $variable3++;
}

#static keyword-u istifadə etməsək, cavablar funksiya hər çağırıldığında 0 olacaq;

test3();
test3();

# ------------------------------------------------------------

# echo print və fərqləri;
// echo sürət performans cəhətdən print-dən daha sürətlidir. echo daha çox dəyəri (dəyişəni) eyni anda istifadə edə bilir, print yox

echo 'salam' . "\n";
# html-in bütün teqləri php tərəfindən tanınır və istifadə olunur.
echo "</br>" . "\n";
echo 'dünya' . "\n";

$variable = 'salam';
$variable2 = array(2, 3, 4, 5, 5, 6, 6);

#echo ilə output;
echo $variable . "\n";
#print ilə output;
print($variable . "\n");
# print_r arrayları output etmək üçün istifadə olunur
print_r($variable2 . "\n");

$variable = 'salam';
# php case-sensitive dildir
echo $VARİABLE . "\n";

// echo "salam", "necesen"; - istifadə oluna bilər
// print "salam", "necesen"; - istifadə oluna bilməz

# ------------------------------------------------------------

# define, const
// define number və stringlər üçündür (PHP 7-dən arraylar üçün də istifadə oluna bilər)
// const sabitləri yalnız siniflərin və ya global scope-un içində təyin edilə bilər, if, else, for, while ,do while daxilində isə yox

const PI = 3.14;

echo PI;

if (true) {
    // Bu, xətaya səbəb olacaq. const blok səviyyəsində işləyə bilməz.
    // const text = "Hello";
}

// define isə hər yerdə yaradıla bilər, globaldır hər yerdə əlçatandır

#sabit deyişən yaratmaq üçün (true - case sensitive olmadığını bildirir)

define('variable', 2, true);

# dəyişənin tipini və valuesini göstərir (stringlərdə uzunluğunu da);

echo var_dump(variable);

# ------------------------------------------------------------

# string metodları;

$text = "Salam dunya, necesen?";

echo strlen($text); #stringin uzunlugunu ekrana cixaran string methodu;
echo str_word_count($text); #stringde olan sozlerin uzunlugunu ekrana cixaran string methodu;
echo strrev($text); #stringi tersden yazan string methodu;
echo strpos($text, 'n'); #qeyd etdiyimiz sozu ve ya herfi tapmaq ucun istifade olunan kod setri;
echo str_replace('necesen', 'ne var ne yox', $text);

# ------------------------------------------------------------

# Data types

#integer;
$deyisen = 1;

#float;
$deyisen = 1.0;

// $deyisen = 0 / 0;

// if (is_nan(0 / 0)) { // NAN olub olmadığını yoxlamaq üçündür
//     echo "NAN";
// } else {
//     echo "DEYIL";
// }

$deyer = null;

if (is_null($deyer)) { // NULL olub olmadığını yoxlamaq üçündür
    echo "NULL-dur";
} else {
    echo "NULL deyil";
}

$available = true;

if ($available) {
    echo "true";
} else {
    echo "false";
}

# ---------------------------------------------------------

$x = 100;
$y = "100";

var_dump($x === $y); // false qaytarir cunki value beraberdir amma type yox;
var_dump($x == $y); // true

//arithmetic operatorlar +, -, *, /, %, **;
//assignment operators =, +=, -=, *=, /=, %=;
//increment, decrement $x-- x-i çap edir, sonra azaldir, --$x x-i azaldir sonra çap edir;

# String concatination operator

$a = 'salam';
$b = 'necesen';
echo $a . ' ' . $b;

# ----------------------------------------------------

//tek dirnaq ve cut dirnaq arasindaki ferqler

$ad = "name";
$soyad = "surname";

#cut dirnaq icinde deyisenlerin valueleri oxunur, tek dırnaqda isə yalnız dəyişənin adı

echo "My name is $ad";
echo 'My name is $ad';
?>

</body>
</html>