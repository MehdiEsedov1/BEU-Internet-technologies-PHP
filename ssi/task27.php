<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["checkbox"])) {
        foreach ($_POST["checkbox"] as $value) {
            echo htmlspecialchars($value) . "<br>";
        }
    } else {
        echo "Heç bir checkbox seçilməyib.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Form</title>
</head>
<body>
    <form method="post" action="">
        <label>
            <input type="checkbox" name="checkbox[]" value="Option 1"> Option 1
        </label><br>
        <label>
            <input type="checkbox" name="checkbox[]" value="Option 2"> Option 2
        </label><br>
        <label>
            <input type="checkbox" name="checkbox[]" value="Option 3"> Option 3
        </label><br>
        <button type="submit">Göndər</button>
    </form>
</body>
</html>
