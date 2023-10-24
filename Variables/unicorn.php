<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $human = $_GET['human'];
    $cat = $_GET['cat'];
    /* $ternary = $human ? ($cat ? ) : ; */
?>
    <form method="GET">
        <label for="human">Are you a human, a cat or a unicorn? Human</label>
        <input type="radio" name='human'>
        <label for="cat">Cat</label>
        <input type="radio" name='cat'>
        <label for="unicorn">Unicorn</label>
        <input type="radio" name='unicorn'>
        <input type="submit" value='submit'>
    </form>
</body>
</html>