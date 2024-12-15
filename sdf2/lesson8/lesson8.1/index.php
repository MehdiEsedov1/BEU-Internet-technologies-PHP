<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="ad">Ad</label><br>
        <input id="ad" type="text" name="ad"><br><br>
        <label for="soyad">Soyad</label><br>
        <input id="soyad" type="text" name="soyad"><br><br>
        <label for="email">Email</label><br>
        <input id="email" type="email" name="email"><br><br>
        <input type="submit" name="submit"><br><br>
        <input autocomplete="off" placeholder="Enter id" type="number" name="deleteId">
        <input type="submit" name="delete">
        <br>
        <br>
        <input type="submit" name="select" value="Select All Users">
    </form>
</body>
</html>
