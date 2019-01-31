<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

    <form action="site7.php" method="post" class="form-group m-5">
        Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
        <input class="btn btn-outline-success" type="submit"> <br>
    </form>

    <br>
    <?php 
    
        /*
        // all types of data we can create in one array
        // example: integer, string, boolean
        $footballers = array("Messi", "Neymar", "Ronaldo", "Mbappe", "Grizmann");
        $footballers[6] = 4000;
        // echo $footballers[6];
        echo count($footballers);
        */

        $fruits = $_POST["fruits"];
        echo "<ul class='list-group'><li class='list-group-item bg-dark text-white'> $fruits[1] </li></ul>";
        //  echo $fruits[2];
    ?>
</body>
</html>