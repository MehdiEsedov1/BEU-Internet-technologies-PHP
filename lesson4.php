<?php

# Arraylarin 3 novu var:
# 1. indexed arrays,
# 2. associative arrays,
# 3. multidimensional arrays.

# Indexed arrays;

$cars = array("Nissan", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

# -------------------------------------------------------------------------------

# Short array syntax;

$cars = ["Nissan", "BMW", "Toyota"];
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

# ------------------------------------------------------------------------------

# count(); - Arraydaki elementlerin sayini almaq ucun
# (stringin uzunlugu strlen()-dir, array-in ise count())

$cars = array("Nissan", "BMW", "Toyota");
echo count($cars);

# -------------------------------------------------------------------------------

# Indexed arrays; (ferqli sekilde yarada bilerik);

$cars[0] = "Nissan";
$cars[1] = "BMW";
$cars[2] = "Toyota";

print_r($cars);

# --------------------------------------------------------------------------------

# Index arrayda dovrler

$numbers = [1, 2, 3, 4];

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i];
    echo "<br>";
}

$numbers = [1, 2, 3, 4];
foreach ($numbers as $value) {
    echo $value;
    echo "<br>";
}

# --------------------------------------------------------------------------------

# Associative arrays;

$age = array("Revan" => "35", "Samir" => "37", "Nezer" => "43");
echo "Revan is " . $age['Revan'] . " years old." . "<br>";

# -------------------------------------------------------------------------------

# Loop Through an Associative Array;

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

# -----------------------------------------------------------------------------

# Multidimensional Arrays;

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15),
);

$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15],
];

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

# -------------------------------------------------------------------------------

# Loop through an Multidimensional Arrays;

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15),
    7,
    "salam",
);

for ($row = 0; $row < count($cars); $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";

    # casting

    foreach ((array) $cars[$row] as $col) {
        echo "<li>" . $col . "</li>";
    }

    echo "</ul>";
}

# --------------------------------------------------------

# Sorting with Arrays; (sort() ve asort() cox oxsardir, ikisi de value-lere gore siralama edir, aralarindaki ferq
# ondan ibaretdir ki, sort() keyleri deyisdirir (silir), asort ise qoruyub saxlayir)
# eyni qayda rsort() ve arsort() ucun de kecerlidir;

// $theNumbersOfClients = array("1" => "A", "3" => "B", "2" => "C");
// sort($theNumbersOfClients); #value-leri elifba sirasi (indexed array formatinda) ile yazir;
// rsort($theNumbersOfClients); #value-leri elifbanin eksi kimi yazir;
// asort($theNumbersOfClients); #value-leri elifba sirasi (keys deyeri qorunur) ile yazir;
// arsort($theNumbersOfClients); #value-leri elifbanin eksi kimi yazir;
// ksort($theNumbersOfClients); # key-lere uygun siralama edir
// krsort($theNumbersOfClients); # key-lerin eksine uygun;

// foreach ($theNumbersOfClients as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
// }

# ----------------------------------------------------------------------------

# Phpde push, pop, shift, unshift;

$a = [1, 2, 3, 4];
array_push($a, 5); # array-in sonuna yeni element elave etmek ucundur
print_r($a);

$a = [1, 2, 3, 4];
array_pop($a); # array-in sonundaki elementi silmek ucundur
print_r($a);

$a = [1, 2, 3, 4];
array_shift($a); # array-in ilk elementini silmek ucundur;
print_r($a);

$a = [1, 2, 3, 4];
array_unshift($a, 0); # array-in onune element elave etmek ucundur
print_r($a);

# ---------------------------------

# array_slice - array_slice(array, start, length, preserve)

$a = [1, 2, 3, 4, 5];
print_r(array_slice($a, 2, 2, true)); # true silinen elementleri index-leri ile bir yerde silmesi ucun yazilir;
echo "<br>";
print_r(array_slice($a, 2, 4, false)); # false silinen elementlerden sonra qalan elementleri 0-ci indexden basladir; default false-dir;
echo "<br>";
print_r(array_slice($a, 2, 4));
echo "<br>";

print_r($a);

# --------------------------------------------------------------

# array_splice - array_splice(array, start, length, array) - array-i mueyyen araliga gore silir ve yerine diger arrayi qoyur;

$a = [1, 2, 3, 4, 5];
$b = [-1, 0];

array_splice($a, 0, 2, $b);
print_r($a);

# array_slice() ile array_splice() esas ferqi ondan ibaretdir ki, array_slice() arrayin originalina tesir etmir, array_splice() ise edir.

#----------------------------------------------------------------

# array_sum() - arraydaki elementlerin cemi, array_product() - arraydaki elementlerin hasili

$a = [1, 2, 3, 4, 5];

echo array_sum($a);

# --------------------------------------------------------------------

$a = [2, 5];

echo array_product($a);

# -----------------------------------------------------------------

# array_search() - arrayda her hansi bir elementi axtarmaq (netice oalraq index cap olunur), array_reverse() arrayi tersine cevirmek

$a = [2, 3, 4, 5, 6];

echo array_search(3, $a);

$a = [2, 3, 4];

print_r(array_reverse($a));

# ----------------------------------------------------------------

# in-array() - arrayda axtaris etmek

$people = ["tall", "short", "medium"];

if (in_array("short", $people)) {
    echo in_array("short", $people) . "<br>";
} else {
    echo "No";
}

# ---------------------------------------------------------------

#range() - mueyyen eded araliginda array yaratmaq;

$number = range(0, 40, 10);
print_r($number);

# --------------------------------------------------------------

# array_values() - arraydaki $value-leri almaq ucun, array_keys() - arraydaki $key-leri almaq ucun;

$numbers = ["bir" => "1", "iki" => "2", "uc" => "3"];
print_r(array_values($numbers));
echo "<br>";
print_r(array_keys($numbers));

# ------------------------------------------------------------

$array = [1, 2, 3, 4];

# 0-ci indexli elementi silir;
unset($array[0]);

# unset() butun arrayi silir
unset($array);

print_r($array);

# ------------------------------------------------------------------------------

# array_diff() - ilk arrayda olub diger arrayda olmayan elementleri qaytarir

$array = [1, 2, 3, 4];
$array2 = [1, 4, 6];

print_r(array_diff($array, $array2));

#-------------------------------------------------------------------------

# array_fill() - eyni elementden bir nece sayda yaratmaq istesek istifade edilir

$a1 = array_fill(3, 4, "blue");
// output: Array ( [3] => blue [4] => blue [5] => blue [6] => blue )

print_r($a1);

# --------------------------------------------------------------------------

# current(), prev(), next(), end();

$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>"; // The current element is Peter
echo next($people) . "<br>"; // The next element of Peter is Joe
echo current($people) . "<br>"; // Now the current element is Joe
echo prev($people) . "<br>"; // The previous element of Joe is Peter
echo end($people) . "<br>"; // The last element is Cleveland
echo prev($people) . "<br>"; // The previous element of Cleveland is Glenn
echo current($people) . "<br>"; // Now the current element is Glenn
echo reset($people) . "<br>"; // Moves the internal pointer to the first element of the array, which is Peter
echo next($people) . "<br>" . "<br>"; // The next element of Peter is Joe
