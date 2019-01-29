<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP</title>
</head>
<body>
    <form action="site3.php" method="get">
        Name: <input type="text" name="name">
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <br>

    Your name is: <?php echo $_GET["name"] ?>    
    Your age is: <?php echo $_GET["age"] ?>    

</body>
</html>