<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
    <body>
        
        <?php

        $animal = $_POST['animal'];
        // page1.php

        session_start();

        echo 'Welcome to page #1 <br />';

        $_SESSION['favcolor'] = 'green';
        $_SESSION['animal']   = $animal;
        $_SESSION['time']     = time();
        
        echo $_SESSION['animal'];

        // Works if session cookie was accepted
        echo '<br /><a href="page2.php">Page 2</a>';

        // Or maybe pass along the session id, if needed
        echo '<br /><a href="page2.php?' . SID . '">Page 2</a>';

        session_destroy()

        ?>
        <form method="post">
            <label for="animal">Favorite animal: <input type="text" name="animal" id=""></label>
        </form>
    </body>
</html>