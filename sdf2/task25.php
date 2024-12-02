<?php
function check_session()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start(); // Sessiya başlanğıcı
    }

    // Sessiya yoxdursa, istifadəçini giriş səhifəsinə yönləndir
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php"); // Yönləndirmə
        exit();
    }
}

function check_url($allowed_urls)
{
    $current_url = basename($_SERVER['PHP_SELF']);
    if (!in_array($current_url, $allowed_urls)) {
        echo "Bu səhifəyə giriş icazəsi yoxdur.";
        exit();
    }
}
