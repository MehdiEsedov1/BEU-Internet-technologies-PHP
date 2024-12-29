<?php
$v1 = 0; // Orijinal dəyişən

// Call by Value (Dəyər ilə ötürmə)
function test1($v1)
{
    $v1++; // Yalnız funksiyada dəyişir
    echo "Call by Value: " . $v1 . "<br>"; // Çap edirik
}

test1($v1); // Funksiyanı çağırırıq, $v1-in dəyəri 1 olacaq
echo "Orijinal $v1: " . $v1 . "<br>"; // Orijinal $v1-in dəyəri dəyişməyib, 0 olacaq

// Call by Reference (İstinadla ötürmə)
function test2(&$v1)
{
    $v1++; // Bu dəfə orijinal dəyişəndə də dəyişiklik olur
    echo "Call by Reference: " . $v1 . "<br>"; // Çap edirik
}

test2($v1); // Funksiyanı çağırırıq, $v1-in dəyəri 1 olacaq
echo "Orijinal $v1: " . $v1 . "<br>"; // Orijinal $v1-in dəyəri də dəyişir, 1 olacaq
