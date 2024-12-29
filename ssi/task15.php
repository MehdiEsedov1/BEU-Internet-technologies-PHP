<?php
// ŞƏRT OPERATORLARI

// if-else
$age = 20;
if ($age >= 18) {
    echo "Siz böyüksünüz.<br>";
} else {
    echo "Siz böyüksünüz deyil.<br>";
}

// else-if
$score = 85;
if ($score >= 90) {
    echo "Qiymət: A<br>";
} elseif ($score >= 80) {
    echo "Qiymət: B<br>";
} else {
    echo "Qiymət: C<br>";
}

// Switch-Case
$day = "Çərşənbə";
switch ($day) {
    case "Bazar":
        echo "Bu gün istirahət günüdür.<br>";
        break;
    case "Çərşənbə":
        echo "Bu gün iş günüdür.<br>";
        break;
    default:
        echo "Bu gün qeyri-müəyyən bir gündür.<br>";
        break;
}

// Ternary Operator
$number = 10;
echo ($number % 2 == 0) ? "Cüt saydır<br>" : "Tək saydır<br>";

// DÖVRLƏR

// For Loop
for ($i = 1; $i <= 5; $i++) {
    echo "For Loop - Ədəd: $i<br>";
}

// While Loop
$i = 1;
while ($i <= 3) {
    echo "While Loop - Dövr nömrəsi: $i<br>";
    $i++;
}

// Do-While Loop
$i = 5;
do {
    echo "Do-While Loop - Dəyər: $i<br>";
    $i++;
} while ($i <= 7);

// Foreach Loop
$fruits = ["Alma", "Armud", "Nar"];
foreach ($fruits as $fruit) {
    echo "Foreach Loop - Meyvə: $fruit<br>";
}
