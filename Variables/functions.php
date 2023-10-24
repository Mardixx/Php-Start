<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./SCSS/components/_information.scss">
    <title>Document</title>
</head>
<body>
    <?php
        /* //First, you need to declare the function to make it available. It is stored in memory, not ran.
        function say_hello($firstname){
            echo "<p>Hello $firstname!</p>";
            echo '<hr>';
        }

        // Function calls during "Runtime" :
        say_hello("Maurice");
        say_hello("Alice");
        say_hello("Jésus");
        say_hello("Judas"); */

        //Exercices
        $name = 'kimi';

        function upperCase($name) {
            echo ucfirst($name);
        };

        upperCase($name);

        $date = date("Y/m/d");

        echo '<br />', $date;

        $time = date('G:i:s');

        echo '<br />', $time, '<br />';
    ?>
    <!-- <form method="GET">
        <label for="number1"><input type="input" name='number1'></label>
        <label for="number2"><input type="input" name='number2'></label>
        <input type="submit">
    </form> -->
    <?php
        /* $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];

        if (is_numeric($number1)) {
            if (is_numeric($number2)){
                function sum($number1, $number2) {
                    echo $sum = '<br />', ($number1 + $number2);
                };
            } else {
                echo $number2, " is not a number";
            }
        } else {
            echo $number1, " is not a number";
        }

        sum($number1, $number2); */


        /* $string = 'Hiya there, how are you?';

        $words =  explode(" ", $string);

        foreach ($words as $word) {
            $firstletter = substr($word, 0, 1);
            echo ucfirst($firstletter);
        } */

        $word = $_POST['word'];

        /* echo str_replace('h', 'e', $word); */

        /* preg_match('/(a)(e)/', 'caecotrophie', $matches, PREG_OFFSET_CAPTURE); */
        /* echo '<pre>';
        print_r($matches);
        echo '<pre>'; */

        /* if (preg_match('/(a)(e)/', $word, $matches, PREG_OFFSET_CAPTURE)) {
            echo str_replace('ae', 'æ', $word);            
        } else {
            echo 'Not a word containing "ae"';
        } */
        /* if (preg_match('/(æ)/', $word, $matches, PREG_OFFSET_CAPTURE)) {
            echo str_replace('æ', 'ae', $word);            
        } else {
            echo 'Not a word containing "æ"';
        } */
    ?>
   <!--  <form method="POST">
        <label for="word">Word to correct: <input type="text" name="word"></label>
        <input type="submit">
    </form> -->
    <?php
        /* $string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
        echo strtolower($string); */


        $ray = $_POST["ray"];
        $height = $_POST["height"];

        function calculate_cone_volume($ray, $height) {
            $volume = $ray * $ray * 3.14 * $height * (1/3);  
            echo 'The volume of a cone which ray is ', $ray, ' and height is ', $height, ' = ' . $volume . ' cm<sup>3</sup><br />';  
        }

        calculate_cone_volume($ray, $height)
    ?>
    <form method="POST">
        <label for="ray">Ray of cone<input type="number" name="ray"></label>
        <label for="height">Height of cone<input type="number" name="height"></label>
        <input type="submit" name="" id="">
    </form>
    <?php
        $notice = $_POST['notice'];
        $warning = $_POST['warning'];
        $error = $_POST['error'];

        function message($notice, $warning, $error) {
            if($warning) {
                echo '<div class="warning">Entered Email adress may not work</div>';
            } else if($error) {
                echo '<div class="error">Entered Email adress is wrong</div>';
            } else {
                echo '<div class="info">Enter Email adress</div>';
            }
        }

        message($notice, $warning, $error)
    ?>
    <form action="" method="POST">
        <label for="info">Notice<input type="radio" name="info"></label>
        <label for="warning">Warning<input type="radio" name="warning"></label>
        <label for="error">Error<input type="radio" name="error"></label>
        <input type="submit">
    </form>

    <?php

    $small = array('hello', 'hi', 'long', 'icon', 'redo','pie');

    $big = array(
        0 => 'longest',
        1 => 'redoable',
        2 => 'liberation',
        3 => 'imaginable',
        4 => 'obstructive',
        5 => 'travelling'
    );
    function generate($small, $big) {
        shuffle($small);
        shuffle($big);
        echo $small[0], '<br /> ';
        echo $big[0];

    };
    
    generate($small, $big);
    ?>

    <form action="" method="post">
        <input type="submit" name="btn" value="Generate a new words">
    </form>
</body>
</html>