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
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="Female">Female</option>
        </select>
        <input type="submit">
    </form>
    <br>

    Your name is: <?php echo $_GET["name"] ?>  <br>  
    Your age is: <?php echo $_GET["age"] ?>  <br>
    you are <?php echo $_GET["gender"] ?>


</body>
</html>