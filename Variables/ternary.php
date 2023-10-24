<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //11 Ternary Exercices

    $gender = array (
        0 => "M",
        1 => 'F'
    );
        
    $gender = $gender[0];
    
    $hello = ($gender == 'M') ? "Hey there handsome gentleman!" : 'Hey there beautiful lady!';

    echo $hello;
    ?>
</body>
</html>