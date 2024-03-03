<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting User Input</title>
</head>

<body>


    <form method='get' action='userInput.php'>

        <label>Name</label>
        <input type='text' name='name' />
        <label>Age</label>
        <input type='text' name='age' />

        <button type='submit'>Submit</button>



    </form>

    <?php echo $_GET["name"] ?>
    <br>
    <?php echo $_GET['age'] ?>

</body>

</html>