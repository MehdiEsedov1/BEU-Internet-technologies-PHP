<?php

function get_all_users($conn)
{
    $sql = "SELECT * FROM users WHERE role = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $role = "employee";
        $stmt->bind_param("s", $role);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
    return 0;
}

function insert_user($conn, $data)
{
    $sql = "INSERT INTO users (full_name, username, password, role) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssss", $data[0], $data[1], $data[2], $data[3]);
        $stmt->execute();
    }
}

function update_user($conn, $data)
{
    $sql = "UPDATE users SET full_name = ?, username = ?, password = ?, role = ? WHERE id = ? AND role = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssssss", $data[0], $data[1], $data[2], $data[3], $data[4], $data[5]);
        $stmt->execute();
    }
}

function delete_user($conn, $data)
{
    $sql = "DELETE FROM users WHERE id = ? AND role = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("is", $data[0], $data[1]);
        $stmt->execute();
        $stmt->close();
    }
}

function get_user_by_id($conn, $id)
{
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
    }
    return 0;
}

function update_profile($conn, $data)
{
    $sql = "UPDATE users SET full_name = ?, password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssi", $data[0], $data[1], $data[2]);
        $stmt->execute();
    }
}

function count_users($conn)
{
    $sql = "SELECT id FROM users WHERE role = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $role = "employee";
        $stmt->bind_param("s", $role);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}
