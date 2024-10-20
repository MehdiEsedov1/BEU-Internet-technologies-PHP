<?php
if (isset($_POST['submit'])) {
    $options = $_POST['options'];

    foreach ($options as $key => $value) {
        echo $value;
        echo "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <div>
            <input name="options[]" type="checkbox" value="option1">
            <label>1</label>
        </div>
        <div>
            <input name="options[]" type="checkbox" value="option2">
            <label>2</label>
        </div>
        <div>
            <input name="options[]" type="checkbox" value="option3">
            <label>3</label>
        </div>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
