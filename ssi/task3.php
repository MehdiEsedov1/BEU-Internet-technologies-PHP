<?php
// Digər proqramlaşdırma dillərində olduğu kimi PHP-də də array-lar mövcuddur və array-lar öz daxilində çoxlu fərqli tipdə dəyərlər saxlaya bilir.
// PHP-də array-lar dinamikdir, yəni ölçüsünü əvvəlcədən təyin etməyə ehtiyac yoxdur.

// PHP-də array-lar əsasən 3 növə bölünür:
// 1. Indexed Array (İndeksli Array)
// 2. Associative Array (Assosiasiyalı Array)
// 3. Multidimensional Array (Çoxölçülü Array)

// İndeksli Array nümunəsi:
$arr = [1, true, "Text"]; // Array müxtəlif məlumat tiplərini saxlaya bilər.

// Assosiasiyalı Array nümunəsi:
$person = [
    "name" => "Mehdi",
    "age" => 25,
    "city" => "Baku",
];

// Çoxölçülü Array nümunəsi:
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
