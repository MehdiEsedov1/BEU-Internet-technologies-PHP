<?php
$functions = get_defined_functions();
$builtInFunctions = $functions['internal'];

// Movcud PHP versiyasindaki built-in funksiyalarinin sayi
echo "<br>";
print_r($builtInFunctions);

// hem built-in, hem de user-defined funksiyalar
echo "<br>";
print_r($functions);

# ------------------------------------------------------------------------------------------------------------------

# User-defined functions - istifadeci terefinden yaradilan funksiyalar;

# funksiya adi reqemlerle, Php-de movcud olan hazir ifadelerle (if, else ve s.), simvollarla (_ ile baslaya biler, yalniz o adla baslayan hazir ifadeler yoxdursa) baslaya bilmez.

// function 1func() { // olmaz
//     echo "olmaz";
// }

function correctName()
{
    echo true;
}

// ------------------------------------------------------
// Funksiyada default (sabit) dəyərlərin istifadə olunması

// Funksiya default olaraq $a=4 və $b=2 dəyərləri ilə çağırılır
function sumTest($a = 4, $b = 2)
{
    // İki ədədin qüvvətini hesablayır və ekrana çap edir
    echo $a ** $b;
}

// Default dəyərlərlə çağırılır: $a=4, $b=2
sumTest(); // Çıxış: 16 (4^2)

// Başqa bir funksiya: sumTest1
function sumTest1($a = 4, $b = 2)
{
    // İki ədədin qüvvətini hesablayır və ekrana çap edir
    echo $a ** $b;
}

// Parametrlər ötürülür: $a=2, $b=3
sumTest1(2, 3); // Çıxış: 8 (2^3)
// ---------------------------------------------------

// Funksiyaların dəyişənlər vasitəsilə çağırılması

// Sadə bir funksiya: test1
function test1()
{
    // "test" yazısını ekrana çap edir
    echo "test";
}

// Funksiya adını saxlayan dəyişən
$deyer = "test1"; // Dəyişən "test1" funksiyasını işarə edir

// Dəyişən vasitəsilə funksiya çağırılır
$deyer(); // Çıxış: test
// --------------------------------------------------

# func_num_args - funksiyaya daxil edilen parametr sayi, func_get_arg - funksiyada olan parametrler;

function test4()
{
    echo "Parametr sayi:" . func_num_args() . "<br/>";
    echo "Birinci parametr:" . func_get_arg(0) . "<br/>";
    echo "İkinci parametr:" . func_get_arg(1) . "<br/>";
}

test4(2, 3, 4, 5, 6);

# ---------------------------------------------------

# foreach istifade ederek deyerlerin gosterilmesi

function test5()
{
    foreach (func_get_args() as $deyer) {
        echo $deyer;
        echo "<br>";
    }
}

test5("nazim", "hikmetov");

# ---------------------------------------------------

# function_exists() - her hansisa adli funksiyanin var olub olmadigini yoxlamaq ucun

if (function_exists("test")) {
    echo "test adli funksiya var";
} else {
    echo "funksiya yoxdur";
}

# ----------------------------------------------------

# get_defined_functions(); - user-defined funksiyalar brauzerde en asagida gorunur

function topla($a, $b)
{
    return $a + $b;
}

function vur($a, $b)
{
    return $a * $b;
}

$definedFunctions = get_defined_functions();

print_r($definedFunctions);

# -----------------------------------------------------

# rekursiv funksiyalar - ozu ozunu cagiran funksiyalardir;

function faktorial($n)
{
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}

// 5 faktorialını (5!) hesablayır, nəticə 120 olacaq
echo faktorial(5);

# -------------------------------------------------------------

# local, global, static  - variable scope

#local

function test6()
{
    $deyer = 13;
    echo $deyer;
}

#global

$deyer = 13;

function test7()
{
    global $deyer;
    $deyer += 2;
}

function test8()
{
# yanlis
// global $deyer += 2;
}

# static

function staticVariable()
{
    #static funksiyani bir nece defe cagiranda $deyer her defe deyisir

    static $deyer = 0;
    $deyer++;

    echo "$deyer defe funksiya cagirilib";
    echo "<br>";
}

staticVariable();
staticVariable();
staticVariable();

# -------------------------------------------------------

# call by value and call by reference

# call by value

function change($x)
{
    $x = $x + 10;
}

$say = 5;

change($say);

#funksiyanin icine parametr olaraq gonderdiyimiz $say = 5 olaraq qalacaq.

echo $say;

#call by reference

function change1(&$x)
{
    $x = $x + 10;
}

$say = 5;

change1($say);

# $say = 15 olacaq;

echo $say;

# ---------------------------------------------------------------

# operatorlarda istediyimiz tip serti qoymaq

function addNumbers(int $a, int $b)
{
    return $a + $b;
}

// parametrlere sert olaraq "int" versek de, netice 10 verecek

echo addNumbers(5, "5 days");

# .php faylında en bas hisseye yazilmalidir, bu zaman integer deyerli parametrlə string deyerli parametri toplayan zaman error verecek
// declare(strict_types=1); //strict modu aktiv edir

function addNumbers1(int $a, int $b)
{
    return $a + $b;
}

echo addNumbers1(5, "5 days");

# ----------------------------------------------------------------
