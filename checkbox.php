<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working With checkboxes</title>
</head>

<body>

    <h2>Working with checkboxes</h2>
    <form action='checkbox.php' method='post'>

        <!-- #region the square brackets are used to denote that the value in the checkboxes will be stored in the same array-->
        <label>Apples</label>
        <input type='checkbox' name='fruits[]' value='apples' />
        <br>

        <label>Oranges</label>
        <input type='checkbox' name='fruits[]' value='oranges' />
        <br>

        <label>Pears</label>
        <input type='checkbox' name='fruits[]' value='pears' />
        <br>


        <button type='submit'>Submit</button>



    </form>

    <?php

    $fruits = $_POST['fruits'];

    echo $fruits[0];


    ?>
</body>

</html>