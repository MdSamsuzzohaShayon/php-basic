<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP</title>
</head>
<body>
    <?php 
        function sayHi($name, $age){
            echo "hello $name, Your age is $age <br/>";
        }
        sayHi("Messi", 32);
        sayHi("Ronaldo", 34);
        sayHi("Neymar", 27);


        function cube($num){
            return $num+$num*$num;
        }

        $cubeRes = cube(20);
        echo "<br/> Area of cube is  $cubeRes";

    ?>
</body>
</html>