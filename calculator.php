<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic calculator</title>
</head>

<body>

    <h2>Building a basic calculator</h2>

    <form action='calculator.php' method='get'>

        <label>Enter the first number</label>
        <input type='text' name='num-1' />
        <br>

        <label>Enter the second number</label>
        <input type='text' name='num-2' />

        <br>
        <button type='submit'>Calculate</button>



    </form>

    <?php echo $_GET["num-1"] + $_GET["num-2"] ?>

</body>

</html>