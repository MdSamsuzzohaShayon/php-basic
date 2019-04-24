<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <!-- <form class="form-group" action="site6.php" method="get">
        <input class="form-control" type="text" name="name">
        <input class="btn btn-outline-success" value="submit" type="submit">
    </form> -->
    <form class="form-group" action="site6.php" method="post">
        <input class="form-control" type="password" name="password" placeholder="Password decoded">
        <input class="btn btn-outline-success" value="submit" type="submit">
    </form>

    <?php 
        // echo "<h3 class='alert alert-primary'> $_GET[name] </h3> <br/>";
        // http://localhost/basic/site6.php?name=Messi&age=34
        // IF WE PASS &AGE=34 IN URL WE CAN ACCESS THAT FROM HERE
        // echo $_GET["age"];


        //GET VS POST
        // WHEN USER INPUT INFORMATION THOUGH GET METHOD THAT SHOW IN URL
        echo "<h3 class='alert alert-primary'> $_POST[password] </h3> <br/>";
    ?>
    </div>
</body>
</html>