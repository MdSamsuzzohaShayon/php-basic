<!-- https://www.youtube.com/watch?v=OK_JCtrrv-c&t=9873s -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning php</title>
</head>
<body>
    <?php 

    //  VARIABLE STARTS WITH DOLLER SIGN
    $charecterName = "Percy Jackson";
    $charecterAge = 23;
    $charecterHeight = 5.8;
    $charecterIsMale = true;
    $charecterSpeech = "Story of my life searching for the right";

    //BETTER TO WRITE HTML CODE INSIDE ECHO AND SURROUND WITH DOUBLE COTTATION (NOT SINGLE)
        echo('<h1> Hello World </h1>');
        echo('<hr />');
        echo "<p>This is my first php site<br/><br/></p>";
        echo "<h2> $charecterName : Sea of Monster</h2>";
        echo "Perseus $charecterName is a fictional character, <br/>";
        echo "the title character and narrator of Rick Riordan's Percy Jackson & the Olympians series.<br/>";
        echo "Age of $charecterName $charecterAge <br/>";
        $charecterAge = 15;
        echo "He was $charecterAge when he learn magic <br/>";
        echo "His height $charecterHeight <br/>";
        echo "This is $charecterIsMale a boy. 1 means true <br/>";
        echo $charecterSpeech;
    ?>
</body>
</html>