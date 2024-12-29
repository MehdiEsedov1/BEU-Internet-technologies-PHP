<?php
// Test üçün bir dəyişən təyin edirik
$age = 25;
$day = "Monday";

// --- IF-ELSE strukturu ---
if ($age >= 18) {
    // Əgər yaş 18 və ya böyükdürsə, bu blok işləyir
    echo "Siz yetkinsiniz.\n";
} else {
    // Əgər şərt doğru deyil, bu blok işləyir
    echo "Siz hələ yetkin deyilsiniz.\n";
}

// --- ELSE IF strukturu ---
if ($age >= 60) {
    echo "Siz yaşlısınız.\n";
} else if ($age >= 30) {
    // İlk şərt doğru deyilsə, növbəti şərt yoxlanır
    echo "Siz orta yaşdasanız.\n";
} else if ($age >= 18) {
    // Əgər yaş 30-dan kiçik amma 18-dən böyükdürsə
    echo "Siz gəncsiniz.\n";
} else {
    // Heç bir şərt doğru deyilsə, else blok işləyir
    echo "Siz hələ yeniyetməsiniz.\n";
}

// --- SWITCH-CASE strukturu ---
switch ($day) {
    case "Monday":
        // Əgər gün Bazar ertəsidirsə
        echo "Bugün Bazar ertəsidir.\n";
        break;
    case "Tuesday":
        // Əgər gün Çərşənbə axşamıdırsa
        echo "Bugün Çərşənbə axşamıdır.\n";
        break;
    case "Wednesday":
        // Əgər gün Çərşənbədirsə
        echo "Bugün Çərşənbədir.\n";
        break;
    default:
        // Heç biri uyğun gəlməzsə, default bloq işləyir
        echo "Bugün tanınmış bir gün deyil.\n";
        break;
}

// --- TERNARY OPERATOR ---
$greeting = ($age >= 18) ? "Yetkinlik yaşına çatmısınız." : "Yetkinlik yaşına çatmamısınız.";
echo $greeting . "\n"; // Yuxarıdakı şərtə əsasən mesaj göstəriləcək
