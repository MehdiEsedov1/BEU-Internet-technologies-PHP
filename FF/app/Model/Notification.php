<?php

function get_all_my_notifications($conn, $id)
{
    $sql = "SELECT * FROM notifications WHERE recipient = ?";
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

function count_notification($conn, $id)
{
    $sql = "SELECT id FROM notifications WHERE recipient = ? AND is_read = 0";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows;
    }
    return 0;
}

function insert_notification($conn, $data)
{
    $sql = "INSERT INTO notifications (message, recipient, type) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sis", $data[0], $data[1], $data[2]);
        $stmt->execute();
    }
}

function notification_make_read($conn, $recipient_id, $notification_id)
{
    $sql = "UPDATE notifications SET is_read = 1 WHERE id = ? AND recipient = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ii", $notification_id, $recipient_id);
        $stmt->execute();
    }
}
