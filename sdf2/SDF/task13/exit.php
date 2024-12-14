<?php
// Sessiyanı başlat
session_start();

// Sessiyadakı bütün məlumatları sil
session_unset();

// Sessiyanı tamamilə sil
session_destroy();

// 3 saniyəlik gecikmə
sleep(3);

// "index.php" səhifəsinə yönləndir
header("Location: index.php");
exit();
