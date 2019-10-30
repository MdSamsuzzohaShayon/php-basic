<?php 

    include  'includes/calc2.php';
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $calc = $_POST["calc"];

    $calculator = new Calc($num1, $num2, $calc);
    echo $calculator->calcMethod();
?>