<?php
// PHP JavaScript və ya Python kimi bir script dilidir və xüsusən veb tətbiqlər hazırlamaq üçün geniş istifadə olunur.
// Variables dəyərlərin saxlanması üçün istifadə olunur.
// PHP-də dəyişən təyin edən zaman adının qarşısına $ qoymaq lazımdır.
// PHP-də dəyişən adları case-sensitive-dir, yəni böyük və ya kiçik hərflərə həssasdır.

// Nümunə:
$v1 = 5; // Integer tipində dəyişən
$v2 = false; // Boolean tipində dəyişən

// PHP-də constant dedikdə dəyəri bir dəfə təyin olunan və bir daha dəyişdirilməyən dəyişənlər nəzərdə tutulur.
// Constant təyin etmək üçün `const` açar sözündən və ya `define()` funksiyasından istifadə etmək lazımdır.

// Nümunə:
const PI = 3.14; // `const` ilə sabit təyini
define("PI_CASE_INSENSITIVE", 3.14); // `define()` ilə sabit təyini (case-sensitive)

// Qeyd: `define()` funksiyasında üçüncü parametr olan case-insensitive artıq istifadə tövsiyə edilmir.
// Əgər üçüncü parametr `true` təyin olunarsa, `PI_CASE_INSENSITIVE` həm böyük, həm də kiçik hərflərlə istifadə edilə bilər.
// Məsələn: `echo pi_case_insensitive;` də işləyəcək, amma bu qarışıqlığa səbəb ola bilər.
