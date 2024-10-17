<?php
$functions = get_defined_functions();
$builtInFunctions = $functions['internal'];

// Movcud PHP versiyasindaki built-in funksiyalarinin sayi
echo "<br>";
// print_r($builtInFunctions);

// hem built-in, hem de user-defined funksiyalar
echo "<br>";
// print_r($functions);

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

# ------------------------------------------------------------------------------------------------------------------

# Funksiyanin teyin edilmesi

# Void functionlar - return qaytarmayan funksiyalardir

function test()
{
    echo "Bu bir void functiondur";
}

test();

# ------------------------------------------------------

# return deyer qaytaran funksiyalar

function sum($a, $b)
{
    return $a + $b;
}

$toplama = sum(4, 5);

echo $toplama;

# ------------------------------------------------------

# funksiyada deyerin static olaraq verilmesi;

function sumTest($a = 4, $b = 2)
{
    echo $a ** $b;
}

sumTest();

function sumTest1($a = 4, $b = 2)
{
    echo $a ** $b;
}

sumTest1(2, 3);

# ------------------------------------------------------

# functionla if else istifadesi

function control($yas)
{
    if ($yas > 18) {
        echo "icaze verildi";
    } elseif ($yas == 17) {
        echo "1 il sonra icaze verilecek";
    } else {
        echo "icaze yoxdur";
    }
}

echo control(19);

# ---------------------------------------------------

# functionlarin ferqli cagirilmasi

function test1()
{
    echo "test";
}

$deyer = "test";

echo $deyer();

# --------------------------------------------------

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

#get_defined_functions(); - user-defined funksiyalar brauzerde en asagida gorunur;

function topla($a, $b)
{
    return $a + $b;
}

function vur($a, $b)
{
    return $a * $b;
}

$definedFunctions = get_defined_functions();

// print_r($definedFunctions);

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
}

test6();

# funksiya daxilinde teyin etdik deye, funksiya xaricinde netice cixarmir, xeta verir
echo $deyer;

# -------------------------------------------------------------

#global

$deyer = 13;

function test7()
{
    global $deyer;
    $deyer += 2;
}

test7();

echo $deyer;

# ------------------------------------------

$deyer = 13;

function test8()
{
#yanlis
//global $deyer += 2;
}

test8();

echo $deyer;

// -------------------------------

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

# bir funksiyadan digerine deyer oturme

# Metod 1:

function sendingValue()
{
    $deyer = 50;
    gettingValue($deyer);
}

function gettingValue($deyer)
{
    echo "gettingValue() funksiyasi ucun deyer:" . $deyer;
}

sendingValue();

# ----------------------------------------

# Metod 2:

//global variable yaradib her ikisinde istifade etmekle

$deyer = 50;

function sendingValue1()
{
    global $deyer;
    echo "sendingValue() funksiyasi ucun deyer " . $deyer;
}

function gettingValue1()
{
    global $deyer;
    echo "gettingValue() funksiyasi ucun deyer " . $deyer;
}

sendingValue1();
echo "<br>";
gettingValue1();

# -------------------------------------

# call by value and call by reference;

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
# .php filesinde ne bas hisseye yazilmalidir, bu zaman integer deyerli parametrle string deyerli parametri toplayan zaman xeta verecek

// declare(strict_types=1); //strict modu aktiv edir

function addNumbers1(int $a, int $b)
{
    return $a + $b;
}

// echo addNumbers1(5, "5 days");

# ----------------------------------------------------------------
