<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
    <body>
        <?php
            session_start();

            echo $_SESSION['favcolor']; // green
            echo $_SESSION['animal'];   // cat
            echo date('Y m d H:i:s', $_SESSION['time']);

            echo '<br /><a href="cookies.php">Page 1</a>';
        ?>
    </body>
</html>