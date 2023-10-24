<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Exercices

    $countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 

    echo $countries[2]; //Returns germany

    $familyKimi = array( 'Véronique', 'Marie-Ange', 'Quentin', 'Corentin', 'Florentin', 'Valentin', 'Maxence', 'Nicolas', 'Kimi');

    print_r($familyKimi);

    $favRecipe = array('Cookies', 'Carbonara', 'Lasagna');

    print_r($favRecipe);

    $favMovies = array('The Greatest Showman', 'Encanto', 'Dragon Ball Super: Super Heroes', 'Jujutsu Kaisen: 0', 'Rio');

    echo $favMovies[2];

    echo '<pre>';
    print_r($countries);
    echo '</pre>';

    var_dump($countries);

    //Add in array

    //Long way 
    array_push($countries, 'England');

    //Shorter way 
    $countries[] = 'England';

    //Associative key
    $person['function'] = 'Junior Web Developer';
    $person['function'] = 'Senior Web Developer'; //Replaces 'Junior Web Developer'
    echo $person['function']; //Returns 'Senior Web Developer'

    //Associative Array
    $person[0] = '02/2198445';
    $person[1] = 'Cantersteen 10';
    $person[2] = 'Brussels';

    // compare this
    echo $person[1];
    // with this
    echo $person['street'];

    //Example of Associative Array (replaces [0] with 'string')
    $user = array (
        'firstname' => 'Juan',
        'lastname' => 'Pablo',
        'adress' => '3 Paradijsestraat',
        'city' => 'Antwerpen'
    );

    echo $user['lastname']; //Returns 'Pablo'

    //Exercice

    $me = array(
        'firstname' => 'Kimi',
        'lastname' => 'Lefort',
        'age' => 18,
        'favSeason' => 'Winter',
        'likePlayingSoccer' => 'Nope but likes to watch it'
    );

    //MultiDimensional arrays 
    /* $me = array(
        'age'=> 45 ,
        'firstname' => 'Alexandre' ,
        'lastname'  => 'Plennevaux' ,
        'favourite_movies' => array('My Own Private Idaho', 'Her', 'Matrix')
    ); */
    
    
    //Exercices

    // 1.
    $me['hobbies'] = array('Video Games', 'Anime', 'Mangas', 'Informatic in general(coding, hardware, software, etc...)');
    

    // 2.
    $myMother = array(
        'firstname' => 'Véronique',
        'lastname' => 'Croes',
        'age' => 52,
        'favSeason' => "IDK (I'm not a bad son I swear)",
        'likePlayingSoccer' => 'Nope'
    );

    // 3.
    $myMother['hobbies'] = array('baking', 'shopping');

    // 4.
    $me['mother'] = $myMother;

    //5.
    echo '<pre>';
    print_r($me);
    echo '</pre>';

    // 6.
    echo 'I understand this code.';

    //Manipulating arrays exercises
    //Count the number of elements

    echo count($myMother['hobbies']); //Length of array
    echo count($me['hobbies']);

    $total = count($myMother['hobbies']) + count($me['hobbies']);

    echo $total;

    //Add an element in a multi-dimensional array
    $me['hobbies'][] = 'taxidermy'; //Adds to the end of the array

    //Replace

    $me['lastname'] = 'Durand'; //Replaces last name with 'Durand'

    $soulmate = array(
        'firstname' => 'someName',
        'lastname' => 'someLastName',
        'age' => 'unknown',
        'favSeason' => "unknown",
        'likePlayingSoccer' => 'unknown'
    );

    $soulmate['hobbies'] = array('Video Games', 'Anime', 'fitness', 'randomHobby');
    echo '<pre>';
    print_r(array_intersect($me['hobbies'] ,$soulmate['hobbies']));
    print_r(array_merge($me['hobbies'] ,$soulmate['hobbies']));
    echo '<pre>';

    //More array exercices

    $web_development = array('frontend', 'backend');
    $web_development['frontend'] = array('xhtml', 'CSS', 'Flash', 'JavaScript');
    $web_development['backend'] = array('Ruby on Rails');
    $html = array('html');
    $web_development['frontend'] = array_replace($web_development['frontend'], $html);
    unset($web_development['frontend'][2]);

    echo '<pre>';
    print_r($web_development);
    echo '<pre>';

    ?>  
</body>
</html>