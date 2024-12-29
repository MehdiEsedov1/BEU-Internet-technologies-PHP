<?php
session_start();
if (isset($_SESSION['role']) && isset($_SESSION['id']) && $_SESSION['role'] == "admin") {
    include "DB_connection.php";
    include "app/Model/User.php";
 
    if (!isset($_GET['id'])) {
        header("Location: user.php");
        exit();
    }

    $id = $_GET['id'];
    $user = get_user_by_id($conn, $id);

    if ($user == 0) {
        header("Location: user.php");
        exit();
    }

    $query = "SELECT COUNT(*) AS task_count FROM tasks WHERE assigned_to = ?";
    $stmt = $conn->prepare($query);
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row['task_count'] > 0) {
            $em = "This user has assigned tasks and cannot be deleted!";
            echo "<script>
                    alert('$em');
                    window.location.href = 'user.php';
                  </script>";
            exit();
        }
    }

    $data = array($id, "employee");
    delete_user($conn, $data);

    $sm = "Deleted Successfully";
    header("Location: user.php?success=$sm");
    exit();
} else {
    $em = "Please log in first";
    header("Location: login.php?error=$em");
    exit();
}
