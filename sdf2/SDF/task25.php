<?php
function check_session()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
}

function check_url($allowed_urls)
{
    $current_url = basename($_SERVER['PHP_SELF']);

    if (!in_array($current_url, $allowed_urls)) {
        echo "e";
        exit();
    }
}

// $sql = "SELECT password FROM user WHERE id = 1";
// $sql = "SELECT name, surname FROM user";
// $myQuery = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
// $sql = "SELECT name, surname FROM user";
// $myQuery = "DELETE FROM user WHERE id = $id";
// $sql = "SELECT * FROM user WHERE name LIKE '$searchTerm' OR surname LIKE '$searchTerm'";
