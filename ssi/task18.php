<?php
$username = "root";
$password = "";
$servername = "localhost";
$dbname = "testdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die(mysqli_connect_error());
}

$query = "UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?";

$stmt = mysqli_prepare($conn, $query);

$name = "John Doe"; // Dəyişdirmək istədiyiniz istifadəçi adı
$email = "john.doe@mail.com"; // Dəyişdirmək istədiyiniz email
$password = "new_password"; // Yeni şifrə
$id = 1; // Dəyişdirmək istədiyiniz istifadəçi id-si

mysqli_stmt_bind_param($stmt, "sssi", $name, $email, $password, $id);

if (mysqli_stmt_execute($stmt)) {
    echo "Verilənlər uğurla yeniləndi!";
} else {
    echo "Xəta baş verdi: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
