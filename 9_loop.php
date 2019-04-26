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
        echo "WHILE LOOP <hr/>";

        $index = 1;
        while($index <=5){
            echo "$index <br/>";
            $index++;
        }

        echo "DO WHILE LOOP<hr/> ";
        do{
            echo "$index <br/>";
            $index++; 
        }while ($index <=10);

        echo "FOR LOOP <hr/>";
        for ($i = 0; $i< 10; $i++){
            echo "$i <br/>";
        }

    ?>
</body>
</html>