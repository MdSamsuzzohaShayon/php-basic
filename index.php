<?php 
    include 'includes/parentClass.php';
    include 'includes/class.php';
    include 'includes/another.php';
    include 'includes/users.php';
    // $object = new NewClass;
    // $object = new ParentClass;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP</title>
    <!-- https://www.youtube.com/watch?v=ziBXNeXQzhU&index=4&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh -->
</head>
<body>
    <?php 
        // THIS NAME OF THE CLASS FROM CLASS.PHP CHECKOUT THAT FILE
        // echo $object->name();
        $object = new NewClass;
        $object2 = new NewClass;




        echo "<br/> getting property <br>";
        echo $object->getProperty();
        echo "<br/>";
        //USING SETTING AND GETTING FROM CLASS.PHP
        $object->setNewProperty("This is new data");
        echo $object->getProperty();
        echo "<br/>";

        //USING SETTING AND GETTING FROM CLASS.PHP FOR OBJECT2
        // unset($object);
        $object2->setNewProperty("This is new data from object two");
        echo $object2->getProperty();
        echo "<br/>";
        echo $object2->print();
        echo "<br/>";
        echo $object2; //Because this isn't string
        echo "<br/>";



        
        //FOR DECLARING STATIC PROPERTY WE NEED TO GIVE ::
        echo Another::$static;
        echo "<br/>";
        echo "We don't need $ for declaring static method";
        echo "<br/>";
        echo Another::staticMethod();
        echo "<hr/>";


        $first ="Cristiano";
        $users = new Users($first, "Ronaldo", "Black", "blue");
        // echo $users->first;
        echo $users->getFullName();





    ?>
</body>
</html>