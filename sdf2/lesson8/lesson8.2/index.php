<?php

if (session_status() == PHP_SESSION_NONE) { // If session doesn't exist, start it to avoid collisions
    session_start();
}

// Create a CSRF token and store it in the session (renew if expired)
if (empty($_SESSION['csrf']) || time() > $_SESSION['csrf_expiration']) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32)); // Cryptographically secure token generation
    $_SESSION['csrf_expiration'] = time() + 600; // Token valid for 10 minutes
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF Protection</title>
</head>

<body>
    <form action="p1test.php" method="post">
        <input type="hidden" name="csrf" value="<?php echo $_SESSION['csrf']; ?>">

        <label>First Name</label><br>
        <input type="text" name="first_name"><br><br>
        <label>Last Name</label><br>
        <input type="text" name="last_name"><br><br>
        <label>Email</label><br>
        <input type="email" name="email"><br><br>
        <button type="submit" name="crud_operation" value="crud">Submit</button>
        <br><br>

        <!-- Fetch user information -->
        <button type="submit" name="get_info" value="info">Get Info</button>
        <br><br>

        <!-- Delete user -->
        <label>User ID to Delete</label><br>
        <input type="number" name="userId" min="1">
        <input type="submit" name="delete" value="Delete">

    </form>
</body>

</html>
