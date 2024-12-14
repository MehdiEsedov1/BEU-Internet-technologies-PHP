<!-- php kodları html kodları ilə yazılarsa php bitiş simvolunu yazmaq mmütləqdir. Əks halda yazıla da bilər, yazılmaya da -->

<?php
# comments

//Single line comments
# Single line comments

/*
Multi line comments
 */

# ----------------------------------------------------------------

# variables

#Dəyişən yaradan zaman $ istifadə olunmalıdır
$variable = 'x';

# -----------------------------------------------------------------

# variable scopes

// local

function test()
{
    $variable1 = 'local';
    echo $variable1;
}

# local olduğu üçün error verəcək, yalnız function daxilində istifadə oluna bilər
// echo $variable1;

// global;

$variable2 = 'global';

function test0()
{
    // `global` açar sözü istifadə edilir
    global $variable2;
    echo $variable2;
}

// static;

// function daxilində yaradılmış dəyişənin dəyişiklikdən sonra dəyərini qorumaq üçün static keyword-u istifadə olunmalıdır

function test1()
{
    static $variable3 = 0;
    echo $variable3;
    $variable3++;
}

# ------------------------------------------------------------

# echo, print və fərqləri

// echo sürət performans cəhətdən print-dən daha sürətlidir
// echo daha çox dəyəri (dəyişəni) eyni anda istifadə edə bilir, print yox
echo 'Hello';

# html-in bütün teqləri php tərəfindən tanınır və istifadə olunur
echo "</br>";

$variable = 'Hello';
$variable2 = array(2, 3, 4, 5, 5, 6, 6);

# echo ilə output
echo $variable;

# print ilə output
print($variable);

# print_r arrayları output etmək üçün istifadə olunur
print_r($variable2);

# php case-sensitive dildir
echo $VARIABLE;

// echo "salam", "necesen"; - istifadə oluna bilər
// print "salam", "necesen"; - istifadə oluna bilməz

# ------------------------------------------------------------

# define, const
// define number və stringlər üçündür (PHP 7-dən arraylar üçün də istifadə oluna bilər)
// const sabitləri yalnız siniflərin və ya global scope-un içində təyin edilə bilər, if else, for, while daxilində isə yox

const PI = 3.14;
echo PI;

// if (true) {
// Bu, xətaya səbəb olacaq. const blok səviyyəsində işləyə bilməz
// const INSIDE_IF = "Hello";
// }

// define isə hər yerdə yaradıla bilər, globaldır hər yerdə əlçatandır
# sabit deyişən yaratmaq üçün (true - case-insensitive bildirir);
define('variable', 2, true);

# dəyişənin tipini və valuesini göstərir (stringlərdə uzunluğunu da);
echo var_dump(variable);

# ------------------------------------------------------------

# string metodları;

$deyisen = "Hello, World!!!";

# stringin uzunlugunu ekrana cixaran string methodu
echo strlen($deyisen);

# stringde olan sozlerin uzunlugunu ekrana cixaran string methodu
echo str_word_count($deyisen);

# stringi tersden yazan string methodu
echo strrev($deyisen);

# qeyd etdiyimiz sozu ve ya herfi tapmaq ucun istifade olunan kod setri
echo strpos($deyisen, 'n');

# Dəyişəndə necesen sözünü ne var ne yox ilə əvəz edəcək
echo str_replace('necesen', 'ne var ne yox', $deyisen);

# ------------------------------------------------------------

# Data types

$deyisen = 0 / 0;

// NAN olub olmadığını yoxlamaq üçündür
if (is_nan(0 / 0)) {
    echo "NAN";
} else {
    echo "DEYIL";
}

$deyer = null;

// NULL olub olmadığını yoxlamaq üçündür
if (is_null($deyer)) {
    echo "NULL-dur";
} else {
    echo "NULL deyil";
}

# ---------------------------------------------------------

$x = 100;
$y = "100";

// false qaytarir cunki value beraberdir amma type yox
var_dump($x === $y);

// true
var_dump($x == $y);

# String concatination operator

$a = 'salam';
$b = 'necesen';
echo $a . ' ' . $b;

# ----------------------------------------------------

// tek dirnaq ve cut dirnaq arasindaki ferqler

$ad = "name";
$soyad = "surname";

# Cüt dırnaq icinde deyisenlerin valueleri oxunur, tek dırnaqda isə yalnız dəyişənin adı
echo "My name is $ad";
echo 'My name is $ad';

?>