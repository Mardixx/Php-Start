<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
        // 1.1 Clean your room Exercise

        $room_is_filthy = true;

        if($room_is_filthy == true ){
            echo "Yuk, Room is dirty : let's clean it up !";
            echo "<br>Room is now clean!";
            $room_is_filthy = false;
        } else {
            echo "Nothing to do, room is neat.";
        }
    
        // 1.2 Clean your room Exercise, improved


        $possible_states = array(
            0 => 'health hazard',
            1 => 'filthy',
            2 => 'dirty',
            3 => 'clean',
            4 => 'immaculate'
        );
        // When testing, change the index value to navigate to the possible array values
        $room_filthiness = $possible_states[2]; 

        if($room_filthiness == $possible_states[0] ){
            echo "Yuk, Room is Disgusting! Let's clean it up !";
        } else if($room_filthiness == $possible_states[1] ){
            echo "Yuk, Room is dirty : let's clean it up !";
        } else if($room_filthiness == $possible_states[2] ){
            echo "Yuk, Room is dirty : let's clean it up !";
        } else {
            echo "<br>Nothing to do, room is neat.";
        }  
        */

        /* date_default_timezone_set('Europe/Brussels');

        $now = date('H:i');

        if ($now >= '05:00' AND $now <= '09:00') {
            echo 'Good morning!';
        } else if ($now >= '09:01' AND $now <= '12:00') {
            echo 'Good day!';
        } else if ($now >= '12:01' AND $now <= '16:00') {
            echo 'Good afternoon!';
        } else if ($now >= '16:01' AND $now <= '21:00') {
            echo 'Good evening!';
        } else {
            echo 'Good night!';
        }

        echo $now; */
        // 3. "Different greetings according to age" Exercise

       /*  if ($_GET['age'] < 12){
            echo 'Hello kiddo!';
        } else if ($_GET['age'] >= 12 AND $_GET['age'] <= 18) {
            echo 'Hello Teenager!';
        } else if ($_GET['age'] >= 18 AND $_GET['age'] <= 115) {
            echo 'Hello Adult!';
        } else {
            echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
        }
        // Form (incomplete)
        ?>
        <form method="get" action="">
            <label for="age">Please type your age :</label>
            <input type="number" name="age">
            <input type="submit" name="submit" value="Greet me now">
        </form> */
        //4 Display message according to gender

        /* if (isset($_POST['male'])) {
            if ($_POST['age'] < 12){
                echo 'Mister kiddo!';
            } else if ($_POST['age'] >= 12 AND $_POST['age'] <= 18) {
                echo 'Mister Teenager!';
            } else if ($_POST['age'] >= 18 AND $_POST['age'] <= 115) {
                echo 'Mister Adult!';
            } else {
                echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
            }
        } else if (isset($_POST['woman'])) {
            if ($_POST['age'] < 12){
                echo 'Miss kiddo!';
            } else if ($_POST['age'] >= 12 AND $_POST['age'] <= 18) {
                echo 'Miss Teenager!';
            } else if ($_POST['age'] >= 18 AND $_POST['age'] <= 115) {
                echo 'Miss Adult!';
            } else {
                echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
            }
        }
        
        ?>
        <form method="POST">
        <label for="age">Please type your age :</label>
            <input type="number" name="age">
            <label for="male"><input type="radio" name="male">Male</label>
            <label for="woman"><input type="radio" name="woman">Woman</label>
            <input type="submit" name="submit" value="Greet me now">
        </form> */

        /* if (isset($_POST['yes'])) {
            if ($_POST['male']) {
                if ($_POST['age'] < 12){
                    echo 'Hello Boy!';
                }
            } else if ($_POST['woman']) {
                if ($_POST['age'] < 12){
                    echo 'Hello Girl!';
                }
            }
        } else if (isset($_POST['no'])) {
            if ($_POST['male']) {
                if ($_POST['age'] < 12){
                    echo 'Aloha Boy!';
                }
            } else if ($_POST['woman']) {
                if ($_POST['age'] < 12){
                    echo 'Aloha Girl!';
                }
            }
        }
        
        ?>
        <form method="POST">
            <label for="yes">Yes <input type="radio" name="yes"></label>
            <label for="no">No <input type="radio" name="no"></label>
            <label for="age">Please type your age: <input type="number" name="age"></label>
            <label for="male"><input type="radio" name="male">Male</label>
            <label for="woman"><input type="radio" name="woman">Woman</label>
            <input type="submit" name="submit" value="Greet me now">
        </form> */

        //7 No ELSE

 /*            $age = $_POST['age'];
            $gender = array(
                0 => $_POST['woman'],
                1 => $_POST['male']
            );
                

            if ($gender[1]) {
                echo "Sorry you don't fit the criteria";
            } else if ($gender[0]) {
                if ($age <= 21 AND $age <= 40){
                    echo 'Welcome to the team !';
                }
            }
        
        ?>
        <form method="POST">
            <label for="age">Please type your age: <input type="number" name="age"></label>
            <label for="male"><input type="radio" name="male">Male</label>
            <label for="woman"><input type="radio" name="woman">Woman</label>
            <input type="submit" name="submit" value="Greet me now">
        </form> */

        //8 "School sucks!" Exercice

        /* $grade = $_GET['grade'];
        
        if (isset($grade)) {
            if ($grade <= 4 AND $grade >= 0) {
                echo "This work is really bad. What a dumb kid! ";
            } else if ($grade >= 5 AND $grade <= 9) {
                echo "This is not sufficient. More studying is required.";
            } else if ($grade == 10) {
                echo "barely enough!";
            } else if ($grade > 10 AND $grade <= 14) {
                echo "Not bad!";
            } else if ($grade >= 15 AND $grade <= 18) {
                echo "Bravo, bravissimo!";
            } else if ($grade >= 19 AND $grade <= 20) {
                echo "Too good to be true : confront the cheater!";
            } else {
                echo "Think you're funny";
            }
        }

        ?>
        <form method="GET">
            <label for="grade">What is your grade on 20: </label>
            <input type="number" name='grade'>
            <input type="submit" value='Submit&#160Grade'>
        </form> */
        ?>
    </body>
</html>