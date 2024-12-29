<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "FF";

$conn = new mysqli($sName, $uName, $pass, $db_name);

if ($conn->connect_error) {
    die($conn->connect_error);
}

$conn->set_charset("utf8");
