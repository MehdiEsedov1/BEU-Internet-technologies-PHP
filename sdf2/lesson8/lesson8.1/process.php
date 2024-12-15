<?php
require_once "connect.php";

function testInput($data)
{
    return strip_tags(htmlspecialchars(trim($data)));
}

# Adding user information

function addUser($conn, $firstName, $lastName, $email)
{
    $sql = "INSERT INTO usersinfo (first_name, last_name, email) VALUES (?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "sss", $firstName, $lastName, $email);

    if (!mysqli_stmt_execute($stmt)) {
        return die("Error: " . mysqli_stmt_error($stmt));
    } else {
        return "Information added";
    }
}

# -----------------------------------------------------------

# Delete function

function deleteUser($conn, $id)
{
    $sql = "DELETE FROM usersinfo WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (!mysqli_stmt_execute($stmt)) {
        return die("Error: " . mysqli_stmt_error($stmt));
    } else {
        return "Information deleted";
    }
}

# ------------------------------------------------------------

function selectUsers($conn)
{
    $sql = "SELECT * FROM usersinfo";
    $stmt = mysqli_prepare($conn, $sql);

    if (!mysqli_stmt_execute($stmt)) {
        return die("Error: " . mysqli_stmt_error($stmt));
    } else {
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <p><?php echo $row['first_name'] ?></p>
            <p><?php echo $row['last_name'] ?></p>
            <p><?php echo $row['email'] ?></p>
            <p><a href="?edit=<?php echo $row['id'] ?>">Change</a></p>
            <?php
}
    }
}

# ------------------------------------------------------------

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];

    echo addUser($conn, $firstName, $lastName, $email);
}

# -----------------------------------------------------------------

if (isset($_POST['delete'])) {
    $id = $_POST['deleteId'];
    echo deleteUser($conn, $id);
}

# -----------------------------------------------------------------

if (isset($_POST['select'])) {
    echo selectUsers($conn);
}

?>
