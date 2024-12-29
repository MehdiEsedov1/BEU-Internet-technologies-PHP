<?php
session_start();
if (isset($_POST['user_name']) && isset($_POST['password'])) {
    include "../DB_connection.php";

    function validate_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user_name = validate_input($_POST['user_name']);
    $password = validate_input($_POST['password']);

    if (empty($user_name)) {
        $em = "User name is required";
        header("Location: ../login.php?error=" . urlencode($em));
        exit();
    }
    if (empty($password)) {
        $em = "Password is required";
        header("Location: ../login.php?error=" . urlencode($em));
        exit();
    }

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $user_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $usernameDb = $user['username'];
        $passwordDb = $user['password'];
        $role = $user['role'];
        $id = $user['id'];

        if (password_verify($password, $passwordDb)) {
            $_SESSION['role'] = $role;
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $usernameDb;

            if ($role === "admin" || $role === "employee") {
                header("Location: ../index.php");
                exit();
            } else {
                $em = "Unknown role type";
                header("Location: ../login.php?error=" . urlencode($em));
                exit();
            }
        } else {
            $em = "Incorrect username or password";
            header("Location: ../login.php?error=" . urlencode($em));
            exit();
        }
    } else {
        $em = "User not found";
        header("Location: ../login.php?error=" . urlencode($em));
        exit();
    }
} else {
    $em = "Unknown error occurred";
    header("Location: ../login.php?error=" . urlencode($em));
    exit();
}
