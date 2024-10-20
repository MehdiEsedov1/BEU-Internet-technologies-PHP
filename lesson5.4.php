<?php
function processForm($postData)
{
    $errors = [];
    $success = [];

    if (isset($postData['submit']) && $postData['submit'] === "submit1") {
        $name = sanitizeInput($postData['name'] ?? '');
        $email = sanitizeInput($postData['email'] ?? '');

        $nameError = validateName($name);
        $emailError = validateEmail($email);

        if ($nameError) {
            $errors['name'] = $nameError;
        } else {
            $success['name'] = "Name is valid.";
        }

        if ($emailError) {
            $errors['email'] = $emailError;
        } else {
            $success['email'] = "Email is valid.";
        }
    }

    return ['errors' => $errors, 'success' => $success];
}

function validateName($name)
{
    if (empty($name)) {
        return "Name cannot be empty.";
    }

    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        return "Only letters and white space allowed in the name.";
    }

    return null;
}

function validateEmail($email)
{
    if (empty($email)) {
        return "Email cannot be empty.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format.";
    }

    return null;
}

function sanitizeInput($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}

$formResults = processForm($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Form Validation Example</h2>
    <?php if (!empty($formResults['success'])): ?>
        <div class="alert alert-success">
            <?php foreach ($formResults['success'] as $message): ?>
                <p>
                    <?php echo $message; ?>
                </p>
            <?php endforeach;?>
        </div>
    <?php endif;?>
    <form method="post" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
            <?php if (!empty($formResults['errors']['name'])): ?>
                <div class="text-danger">
                    <?php echo $formResults['errors']['name']; ?>
                </div>
            <?php endif;?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            <?php if (!empty($formResults['errors']['email'])): ?>
                <div class="text-danger">
                    <?php echo $formResults['errors']['email']; ?>
                </div>
            <?php endif;?>
        </div>
        <button type="submit" name="submit" value="submit1" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>