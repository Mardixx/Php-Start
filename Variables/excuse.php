<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excuses For Parents</title>
    <link rel="stylesheet" href="./SCSS/style.css">
    <img src="./img/gear-solid.ico" alt="Gear Icon">
</head>
    <body>
        <form method="POST" id="form">
            <label for="name">Name: <input type="text" name="name" id="text"></label>
            <label for="male">Male: <input type="radio" name="male" id="radio"></label>
            <label for="female">Female: <input type="radio" name="female" id="radio"></label>
            <label for="date">Date: <input type="date" name="date" id="date" placeholder="Day-Month-Year"></label>
            <label for="teacher">Teacher name: <input type="text" name="teacher" id="text"></label>
            <label for="illness">Illness <input type="radio" name="illness" id="radio"></label>
            <label for="death">Death of a pet or family member <input type="radio" name="death" id="radio"></label>
            <label for="extra">Extra-curricular activities <input type="radio" name="extra" id="radio"></label>
            <label for="other">Other <input type="radio" name="other" id="radio"></label>
            <input type="submit" id="submit">
        </form>
        <?php
            $create = date_create($_POST['date']);
            $date = date_format($create, 'D d M Y');

            $name = $_POST['name'];

            $teacher = $_POST['teacher'];

            $gender  = array(
                0 => $_POST['male'],
                1 => $_POST['female']
            );

            $excuse = array(
                0 => $_POST['illness'],
                1 => $_POST['death'],
                2 => $_POST['extra'],
                3 => $_POST['other']
            );

            if ($gender[0]) {
                if ($excuse[0]) {
                    echo "<p class='text'> \"Sorry Miss/Mister ", $teacher, " ", $date, " our son ", $name, " was sick and couldn't for the safety of the students and teachers come to school, our heartfelt apologies.\" </p>";
                } else if ($excuse[1]) {
                    echo "<p class='text'> \"Sorry Miss/Mister ", $teacher, " ", $date, " our son ", $name, " lost someone dear to him and could not go to school, our apologies.\" </p>";
                } else if ($excuse[2]) {
                    echo "<p class='text'> \"Sorry Miss/Mister ", $teacher, " ", $date, " our son ", $name, " had extra-curricular activities that he couldn't skip, we are sorry he could not go to school this day, our apologies.\" </p>";
                } else {
                    echo "<p class='text'> \"Sorry Miss/Mister ", $teacher, " ", $date, " our son ", $name, " had reasons for which he couldn`t go to school, our apologies.\" </p>";
                };
            } else {
                if ($excuse[0]) {
                    echo "<p class='text'> \"Sorry Miss/Mister ", $teacher, " ", $date, " our daughter ", $name," was sick and couldn't for the safety of the students and teachers come to school, our heartfelt apologies.\" </p>";
                } else if ($excuse[1]) {
                    echo "<p class='text'> \"Sorry Miss/Mister ", $teacher, " ", $date, " our daughter ", $name," lost someone dear to her and couldn't go to school, our apologies.\" </p>";
                } else if ($excuse[2]) {
                    echo "<p class='text'> \"Sorry Miss/Mister ", $teacher, " ", $date, " our daughter ", $name," had extra-curricular activities that she couldn't skip, we are sorry she could not go to school this day, our apologies.\" </p>";
                } else {
                    echo "<p class='text'> \"Sorry Miss/Mister ", $teacher, " ", $date, " our daughter ", $name," had reasons for which she couldn't go to school, our apologies.\" </p>";
                };
            };

        ?>
    </body>
</html>