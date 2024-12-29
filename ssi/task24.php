<?php

// 1. Void funksiya nümunəsi
function greet($name)
{
    echo "Salam, " . $name . "!<br>"; // Funksiya heç bir dəyər qaytarmır
}

greet("Ali"); // Çıxış: Salam, Ali!

// 2. Return funksiyası nümunəsi
function addNumbers($a, $b)
{
    return $a + $b; // Funksiya nəticəni geri qaytarır
}

$result = addNumbers(5, 10); // Funksiya geri qaytardığı dəyəri qəbul edir
echo "Nəticə: " . $result . "<br>"; // Çıxış: Nəticə: 15

// 3. Return funksiyası nümunəsi ilə daha kompleks əməliyyat
function multiplyNumbers($a, $b)
{
    $product = $a * $b; // Hesablama
    return $product; // Nəticəni geri qaytarır
}

echo "Çoxaltma nəticəsi: " . multiplyNumbers(3, 4) . "<br>"; // Çıxış: Çoxaltma nəticəsi: 12

// 4. Void və Return funksiyalarının birlikdə istifadəsi
function printResult($a, $b)
{
    $sum = addNumbers($a, $b); // addNumbers funksiyasından qaytarılan dəyəri saxlayır
    echo "Cəm: " . $sum . "<br>"; // Nəticəni çap edir
}

printResult(7, 8); // Çıxış: Cəm: 15
