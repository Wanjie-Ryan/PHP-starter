<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadLib game</title>
</head>

<body>

    <form method='get' action='madlib.php'>


        <h2>Building a basic Madlib game</h2>

        <label>Enter a color</label>
        <input type='text' name='color' />
        <br>
        <label>Enter a Plural Noun</label>
        <input type='text' name='noun' />
        <br>
        <label>Enter your fav celeb</label>
        <input type='text' name='celeb' />

        <button type='submit'>Submit</button>
    </form>


</body>

<?php

//varibales to store the inputs from the user
$color = $_GET['color'];
$noun = $_GET['noun'];
$celeb = $_GET['celeb'];

echo "Roses are $color <br>";
echo "$noun are blue <br>";
echo "I love $celeb <br>";




?>

</html>