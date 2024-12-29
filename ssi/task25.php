<?php

// Massiv yaradılması
$fruits = ["Apple", "Banana", "Cherry"];

// array_push() - Massivə bir və ya bir neçə element əlavə edir
array_push($fruits, "Orange", "Grapes"); // Massivin sonuna "Orange" və "Grapes" əlavə edilir
echo "array_push: ";
print_r($fruits); // Çıxış: ["Apple", "Banana", "Cherry", "Orange", "Grapes"]
echo "<br>";

// array_pop() - Massivdən sonuncu elementi çıxarır
array_pop($fruits); // "Grapes" sonuncu elementini çıxarır
echo "array_pop: ";
print_r($fruits); // Çıxış: ["Apple", "Banana", "Cherry", "Orange"]
echo "<br>";

// array_shift() - Massivdən ilk elementi çıxarır
array_shift($fruits); // "Apple" ilk elementini çıxarır
echo "array_shift: ";
print_r($fruits); // Çıxış: ["Banana", "Cherry", "Orange"]
echo "<br>";

// array_unshift() - Massivin əvvəlinə bir və ya bir neçə element əlavə edir
array_unshift($fruits, "Mango", "Peach"); // "Mango" və "Peach" massivə əvvəlinə əlavə edilir
echo "array_unshift: ";
print_r($fruits); // Çıxış: ["Mango", "Peach", "Banana", "Cherry", "Orange"]
echo "<br>";
