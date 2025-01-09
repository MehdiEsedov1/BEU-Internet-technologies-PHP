<?php
$a = [2, 3, 1, 4, 5];
$b = [2, 1, 6, 7, 8];
$result = [];

// Birinci massivdə olmayan elementləri əlavə et
for ($i = 0; $i < count($a); $i++) {
    $isUnique = true;
    for ($j = 0; $j < count($b); $j++) {
        if ($a[$i] == $b[$j]) {
            $isUnique = false;
            break;
        }
    }
    if ($isUnique) {
        $result[] = $a[$i];
    }
}

// İkinci massivdə olmayan elementləri əlavə et
for ($i = 0; $i < count($b); $i++) {
    $isUnique = true;
    for ($j = 0; $j < count($a); $j++) {
        if ($b[$i] == $a[$j]) {
            $isUnique = false;
            break;
        }
    }
    if ($isUnique) {
        $result[] = $b[$i];
    }
}

// Nəticəni çap et
print_r($result);
?>
