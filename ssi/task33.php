<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rəng Seçici Formu</title>
</head>
<body>

<h2>Rəng Seçin və HEX Kodunu Görün</h2>

<!-- Form -->
<form action="" method="POST">
    <label for="colorPicker">Rəng Seçin:</label>
    <input type="color" id="colorPicker" name="color" value="#000000">
    <input type="submit" value="Rəngi Göndər">
</form>

<?php
// Form göndərildikdə, seçilən rəngi ekranda göstəririk
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['color'])) {
        $selectedColor = $_POST['color']; // Seçilmiş rəngin HEX kodu
        echo "<p>Seçilən HEX Kodu: <strong>$selectedColor</strong></p>";
    } else {
        echo "<p>Rəng seçilməyib!</p>";
    }
}
?>

</body>
</html>
