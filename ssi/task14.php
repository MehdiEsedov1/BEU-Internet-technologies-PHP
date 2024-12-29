<?php
// strlen() - Verilmiş stringin uzunluğunu qaytarır.
$text = "Hello, PHP!";

echo "Stringin uzunluğu: " . strlen($text) . "<br>"; // Çıxış: 11

// str_word_count() - Verilmiş stringdəki sözlərin sayını qaytarır.
echo "Stringdəki sözlərin sayı: " . str_word_count($text) . "<br>"; // Çıxış: 2

// strrev() - Verilmiş stringi tərsinə çevirir.
echo "Tərsinə çevrilmiş string: " . strrev($text) . "<br>"; // Çıxış: !PHP ,olleH

// str_replace() - Verilmiş substring-i başqa bir substring ilə əvəz edir.
$newText = str_replace("PHP", "World", $text);
echo "Dəyişdirilmiş string: " . $newText . "<br>"; // Çıxış: Hello, World!

// strtoupper() - Verilmiş stringi böyük hərflərə çevirir.
echo "Böyük hərflərlə: " . strtoupper($text) . "<br>"; // Çıxış: HELLO, PHP!

// strtolower() - Verilmiş stringi kiçik hərflərə çevirir.
echo "Kiçik hərflərlə: " . strtolower($text) . "<br>"; // Çıxış: hello, php!

// substr() - Verilmiş stringdən müəyyən bir hissəni qaytarır.
$substring = substr($text, 7, 3); // 7-ci mövqedən başlayır, 3 simvol alır.
echo "Substring: " . $substring . "<br>"; // Çıxış: PHP

// trim() - Verilmiş stringin əvvəlində və sonunda olan boşluqları silir.
$trimmedText = trim("   Hello, PHP!   ");
echo "Boşluqları silinmiş string: '" . $trimmedText . "'<br>"; // Çıxış: 'Hello, PHP!'

// explode() - Stringi müəyyən bir ayırıcıya görə massivə çevirir.
$fruits = "apple,banana,orange";
$fruitArray = explode(",", $fruits);
echo "Massiv elementləri: ";
print_r($fruitArray); // Çıxış: Array ( [0] => apple [1] => banana [2] => orange )
echo "<br>";

// implode() - Massiv elementlərini müəyyən bir ayırıcı ilə birləşdirərək string yaradır.
$joinedFruits = implode(", ", $fruitArray);
echo "Birləşdirilmiş string: " . $joinedFruits . "<br>"; // Çıxış: apple, banana, orange

// str_repeat() - Verilmiş stringi müəyyən sayda təkrar edir.
echo "String təkrar: " . str_repeat("PHP! ", 3) . "<br>"; // Çıxış: PHP! PHP! PHP!

// htmlspecialchars() - Xüsusi HTML simvollarını təhlükəsiz formata çevirir.
$html = "<h1>Hello, PHP!</h1>";
echo "Təhlükəsiz string: " . htmlspecialchars($html) . "<br>"; // Çıxış: &lt;h1&gt;Hello, PHP!&lt;/h1&gt;
