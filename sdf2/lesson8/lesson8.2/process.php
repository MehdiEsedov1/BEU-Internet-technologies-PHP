<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once "connect.php"; // For connecting to the database

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_SERVER['HTTP_REFERER']);
    print_r($_SERVER['HTTP_HOST']);

    if (isset($_POST['csrf']) && $_POST['csrf'] != $_SESSION['csrf']) {
        die("CSRF token error");
    }

    if (time() > $_SESSION['csrf_expiration']) {
        die("CSRF token has expired");
    }

    // Use HTTP_REFERER to ensure the form submission is from the same origin
    if (isset($_SERVER['HTTP_REFERER']) && parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) != $_SERVER['HTTP_HOST']) {
        die("Referer error: invalid source");
    }

    echo "Form successfully submitted.";

    // Prevent CSRF token reuse
    unset($_SESSION['csrf']);
}
// CSRF token is regenerated each time
$_SESSION['csrf'] = bin2hex(random_bytes(32));

function addUser($conn, $firstName, $lastName, $email)
{
    $sql = "INSERT INTO users (first_name, last_name, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "sss", $firstName, $lastName, $email);

    if (!mysqli_stmt_execute($stmt)) {
        return "Error: " . mysqli_stmt_error($stmt);
    } else {
        return "Data added successfully";
    }

    mysqli_stmt_close($stmt);
}

function getUsers($conn)
{
    $sql = "SELECT * FROM users";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($array = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php echo htmlspecialchars($array['first_name']); ?></p>
        <p><?php echo htmlspecialchars($array['last_name']); ?></p>
        <p><?php echo htmlspecialchars($array['email']); ?></p>
        <a href='?edit=<?php echo htmlspecialchars($array["id"]); ?>'>Edit</a>
    <?php
}

    mysqli_stmt_close($stmt);
}

function deleteUser($conn, $userId)
{
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $userId);

    if (!mysqli_stmt_execute($stmt)) {
        return "Error: " . mysqli_stmt_error($stmt);
    } else {
        return "Deleted successfully";
    }

    mysqli_stmt_close($stmt);
}

function getUserById($conn, $id)
{
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function updateUser($conn, $id, $firstName, $lastName, $email)
{
    $sql = "UPDATE users SET first_name = ?, last_name = ?, email = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $firstName, $lastName, $email, $id);

    if (!mysqli_stmt_execute($stmt)) {
        return "Error: " . mysqli_stmt_error($stmt);
    } else {
        return "Data updated successfully";
    }

    mysqli_stmt_close($stmt);
}

// CRUD operations
if (isset($_POST['crud_operation']) && $_POST['crud_operation'] == "crud") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    echo addUser($conn, $firstName, $lastName, $email);
}

if (isset($_POST['get_info']) && $_POST['get_info'] == "info") {
    echo getUsers($conn);
}

if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];
    echo deleteUser($conn, $userId);
}

if (isset($_GET["edit"])) {
    $id = $_GET["edit"];
    $userInfos = getUserById($conn, $id);

    if ($userInfos) {
        ?>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($userInfos['id']); ?>">
            <input type="hidden" name="csrf" value="<?php echo $_SESSION['csrf']; ?>">

            <label>First Name</label><br>
            <input type="text" name="first_name" value="<?php echo isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : htmlspecialchars($userInfos['first_name']); ?>"><br><br>

            <label>Last Name</label><br>
            <input type="text" name="last_name" value="<?php echo isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : htmlspecialchars($userInfos['last_name']); ?>"><br><br>

            <label>Email</label><br>
            <input type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : htmlspecialchars($userInfos['email']); ?>"><br><br>

            <input type="submit" name="change" value="Update">
        </form>
<?php
} else {
        echo "ERROR: Data not found";
    }
}

if (isset($_POST["change"])) {
    $id = $_POST["id"];
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];
    echo updateUser($conn, $id, $firstName, $lastName, $email);
    $_GET["edit"] = $id;
}
