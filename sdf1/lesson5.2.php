<?php
if (isset($_POST['submit'])) {
    $car = $_POST['car'];
    $text = $_POST['text'];

    echo $text . " " . $car;
    print_r($_POST);
}

?>

<form action="" method="POST">
    <select name="car" id="">
        <option value="BMW">BMW</option>
        <option value="Mercedes">MERCEDES</option>
        <option value="Ferrari">FERRARI</option>
    </select>
    <br>
    <textarea name="text" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="submit" value="send">
</form>