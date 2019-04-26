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
        $isMale = true;
        $isStudent = true;
        $canRide = false;
        if($isMale && $canRide && $isStudent){
            echo "you are a male that's $isMale";
        }elseif(!$isStudent || $canRide){
            echo "You are a student but You can ride ";
        }else{
            echo "you are not a male that's $isMale, not student, can't ride, ";
        }
    ?>
</body>
</html>