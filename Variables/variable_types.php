<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = 'Kimi';
    ?>
    <p>Hi! My name is <?php echo $name; ?>.</p>
    <?php
    $age = 18;
    ?>
    <p>I am <?php echo $age; ?> years old.</p>
    <?php
    $eye_color = 'Blue';
    ?>
    <p>My eyes are <?php echo $eye_color; ?>.</p>
    <?php $kimi = array(
        0 => 'Véronique',
        1 => 'Marie-Ange',
        2 => 'Quentin',
        3 => 'Corentin',
        4 => 'Florentin',
        5 => 'Valentin',
        6 => 'Maxence',
        7 => 'Nicolas',
        8 => 'Kimi',
    )
    ?> 
    <p>The first person in my family is <?php echo $kimi[0] ?>.</p>

    <p>True or False (Boolean)</p>
    <?php 

    $temperature = 16;

    if( $temperature >= 15 ) {
    // code to execute if the condition results TRUE
    $clothes = "T-shirt";
    $should_i_wear_a_scarf = false;
        } else {
        // code to execute if the condition results FALSE
        $clothes = "Pull-over";
        $should_i_wear_a_scarf = true;
        }
    ?>
    <p><?php echo $clothes; ?></p>
 
</body>
</html>