<?php

function insert_task($conn, $data)
{
    $sql = "INSERT INTO tasks (title, description, assigned_to, due_date) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssss", $data[0], $data[1], $data[2], $data[3]);
        $stmt->execute();
    }
}

function get_all_tasks($conn)
{
    $sql = "SELECT * FROM tasks ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
    return 0;
}

function count_tasks_due_today($conn)
{
    $sql = "SELECT id FROM tasks WHERE due_date = CURDATE() AND status != 'completed'";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function count_tasks_overdue($conn)
{
    $sql = "SELECT id FROM tasks WHERE due_date < CURDATE() AND status != 'completed'";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function get_all_tasks_due_today($conn)
{
    $sql = "SELECT * FROM tasks WHERE due_date = CURDATE() AND status != 'completed' ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
    return 0;
}

function get_all_tasks_overdue($conn)
{
    $sql = "SELECT * FROM tasks WHERE due_date < CURDATE() AND status != 'completed' ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
    return 0;
}

function get_all_tasks_NoDeadline($conn)
{
    $sql = "SELECT * FROM tasks WHERE status != 'completed' AND (due_date IS NULL OR due_date = '0000-00-00') ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
    return 0;
}

function count_tasks_NoDeadline($conn)
{
    $sql = "SELECT id FROM tasks WHERE status != 'completed' AND (due_date IS NULL OR due_date = '0000-00-00')";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function delete_task($conn, $data)
{
    $sql = "DELETE FROM tasks WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $data[0]);
        $stmt->execute();
    }
}

function get_task_by_id($conn, $id)
{
    $sql = "SELECT * FROM tasks WHERE id = ?";
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

function count_tasks($conn)
{
    $sql = "SELECT id FROM tasks";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function update_task($conn, $data)
{
    $sql = "UPDATE tasks SET title = ?, description = ?, assigned_to = ?, due_date = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssssi", $data[0], $data[1], $data[2], $data[3], $data[4]);
        $stmt->execute();
    }
}

function update_task_status($conn, $data)
{
    $sql = "UPDATE tasks SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("si", $data[0], $data[1]);
        $stmt->execute();
    }
}

function get_all_tasks_by_id($conn, $id)
{
    $sql = "SELECT * FROM tasks WHERE assigned_to = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
    return 0;
}

function count_pending_tasks($conn)
{
    $sql = "SELECT id FROM tasks WHERE status = 'pending'";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function count_in_progress_tasks($conn)
{
    $sql = "SELECT id FROM tasks WHERE status = 'in_progress'";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function count_completed_tasks($conn)
{
    $sql = "SELECT id FROM tasks WHERE status = 'completed'";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function count_my_tasks($conn, $id)
{
    $sql = "SELECT id FROM tasks WHERE assigned_to = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function count_my_tasks_overdue($conn, $id)
{
    $sql = "SELECT id FROM tasks WHERE due_date < CURDATE() AND status != 'completed' AND assigned_to = ? AND due_date != '0000-00-00'";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function count_my_tasks_NoDeadline($conn, $id)
{
    $sql = "SELECT id FROM tasks WHERE assigned_to = ? AND status != 'completed' AND (due_date IS NULL OR due_date = '0000-00-00')";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function count_my_pending_tasks($conn, $id)
{
    $sql = "SELECT id FROM tasks WHERE status = 'pending' AND assigned_to = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function count_my_in_progress_tasks($conn, $id)
{
    $sql = "SELECT id FROM tasks WHERE status = 'in_progress' AND assigned_to = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function count_my_completed_tasks($conn, $id)
{
    $sql = "SELECT id FROM tasks WHERE status = 'completed' AND assigned_to = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}
