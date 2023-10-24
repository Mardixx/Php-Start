<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

    foreach ($pronouns as $pronoun) {
        echo $pronoun, ' code<br>';
    };

    $amount_of_lines = 1;

    while ($amount_of_lines <= 100)
    {
        echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
        $amount_of_lines ++; 
    };

    for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++){
    echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
    }; */

    //Exercices
    $numbers = 1;

    /* while ($numbers <= 120) 
    {
        echo $numbers, '<br />';
        $numbers ++;
    }; */

    /* for ($number = 1; $numbers <= 120; $numbers ++) {
        echo $numbers, '<br />';
    } */

    $members = array("Alexandre Vandewiele", "Antoine Lansman", "Bastien Venturi", "Carole Gérard", "Elisabeth Leyder", "Elodie Ali", "Justin Michel", "Justine Leleu", "Kimi Lefort", "Layla", "Lidwine Careme", "Lucas Beauloi", "Mathias Barbier", "okly2023", "Pierre Marien", "Robin Piot", "Rosalie Boulard", "Stephane Comblez", "Tim Desmet", "Toms", "Valentin Lefort", "Vens Alexandre", "Virginie Dourson");
    
    foreach ($members as $member) {
        echo $member, '<br />';
    };
    
    ?>
    <select name="countries">
        <?php
            $countries = array( 'BE' => 'Belgium', 'FR' => 'France' , 'DE' => 'Germany', 'NL' => 'Netherlands', 'UA' => 'Ukraine', 'UK' => 'United Kingdom', 'RO' => 'Romania', 'LU' => 'Luxembourg', 'CZ' => 'Czech Republic', 'ES' => 'Spain'); 
            foreach ($countries as $country) {?>
                <option value=""><?php echo $country?></option> 
           <?php };
        ?>
    </select>
</body>
</html>