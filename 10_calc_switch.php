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


    <!-- <h3>Addition</h3>
    <form action="calc.php" method="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    <br>
    <input type="submit">
    </form>


    Answer:  
    //THIS ECHO MUST SURROUND WITH PHP TAG TO RUN THIS
    //echo $_GET["num1"] + $_GET["num2"];
     -->

    <nav class="navbar bg-dark navbar-dark">
       <a href="#" class="navbar-brand">Calculator</a> 
    </nav>
    <div class="container bg-light my-5 p-4 ">
        
        <!-- FULL FUNCTION CALCULATOR -->
        <form class="form-group " action="calc.php" method="post">
            <input class="my-3 form-control" type="number" step="0.01" name="num1" placeholder="Enter first number">
            <input class="my-3 form-control" type="text" name="op" placeholder="Enter +, -, /, *, % (any of those)">
            <input class="my-3 form-control" type="number" name="num2" placeholder="Enter Second number">
            <input class="btn btn-outline-success" type="submit">
        </form>

        <?php 
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];


            // if($op == "+"){
            //     $result =  $num1+$num2;
            //     echo "<div class='alert alert-primary' role='alert'>$result</div>";
            // }elseif ($op == "-") {
            //     $result =  $num1-$num2;
            //     echo "<div class='alert alert-primary' role='alert'>$result</div>";
            // }elseif ($op == "*") {
            //     $result =  $num1*$num2;
            //     echo "<div class='alert alert-primary' role='alert'>$result</div>";
            // }elseif ($op == "/") {
            //     $result =  $num1/$num2;
            //     echo "<div class='alert alert-primary' role='alert'>$result</div>";
            // }elseif ($op == "%") {
            //     $result =  $num1%$num2;
            //     echo "<div class='alert alert-primary' role='alert'>$result</div>";
            // }else {
            //     echo "your operatior is not valid";
            // }

            switch($op):
                case "+":
                    $result =  $num1+$num2;
                    echo "<div class='alert alert-primary' role='alert'>$result</div>";
                    break;
                case "-":
                    $result =  $num1-$num2;
                    echo "<div class='alert alert-primary' role='alert'>$result</div>";
                    break;
                case "*":
                    $result =  $num1*$num2;
                    echo "<div class='alert alert-primary' role='alert'>$result</div>";
                    break;
                case "/":
                    $result =  $num1/$num2;
                    echo "<div class='alert alert-primary' role='alert'>$result</div>";
                    break;
                case "%":
                    $result =  $num1%$num2;
                    echo "<div class='alert alert-primary' role='alert'>$result</div>";
                    break;
                default:
                    echo "<div class='alert alert-primary' role='alert'>There is no operator is present now</div>";
                    break;
            endswitch;

        ?>
    </div>
    



</body>
</html>