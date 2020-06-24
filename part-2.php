<?php
// https://www.youtube.com/watch?v=DVyyq2rrEXY&t=2930s



/* Connect to a MySQL database using driver invocation */

$host = "localhost";
$dbname = "pdo";
$user = "root";
$password = "";



try {
    // $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password);
    ?> <script> console.log("Db connected");</script> <?php
    
    
    






    /*
    // CREATE OPERATION
    $sql = "insert into players(name, club) values('Cristiano Ronaldo', 'Juventus FC' )";

    // TWO METHOD FOR PREPARE STATMENT AND EXECUTE STATEMENT
    // $stmt = $pdo->query($sql); 
    $stmt = $pdo->exec($sql);
    */

    /*
    // CREATE OPERATION THOUGH PREPARE STATEMENT
    // $name = "Kilyon Mbappe";
    // $club = "PSG";
    $sql = "INSERT INTO players(name, club) VALUES(:name, :club)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':club', $club);

    // SAVING MULTIPLE RECORDS BY EXECUTING MULTIPLE TIMES
    $name = "Robert Lewendoski";
    $club = "Bayern Munich";
    $stmt->execute();
    $name = "Earling Haaland";
    $club = "Borussia Dortmund";
    $stmt->execute();
    */



    









    /*
    // READ SINGLE OPERATION
    $sql = "select * from players where id=1";
    $stmt = $pdo->query($sql); 
    */


    /*
    // FETCHING DATA FROM DATABASE
    // https://www.php.net/manual/en/pdostatement.fetch.php
    $result = $stmt->fetch();
    echo "<br> <pre>";
    print_r($result);
    */

    /*
    // PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<br> <pre>";
    print_r($result);
    echo $result['name'] . " is a great player";
    */

    /*
    $result2 = $stmt->fetch(PDO::FETCH_NUM);
    echo "<br> <pre>";
    print_r($result2);
    */

    /*
    print("Return next row as an anonymous object with column names as properties\n");
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    echo "<br> <pre>";
    print_r($result);
    echo $result->name . " is a great player";
    */














    /*
    // MULTIPLE DATA READING
    $sql = 'SELECT * FROM players';
    $stmt = $pdo->query($sql); // WE CAN'T USE EXAC FUNCTION HERE BECAUSE WE ARE ONLY FETCHING
    // FETCH ALL
    print("Fetch all of the remaining rows in the result set:\n");
    $result = $stmt->fetchAll();
    echo "<br> <pre>";
    print_r($result);
    */

    /*
    // Sets an attribute on the database handle
    // https://www.php.net/manual/en/pdo.setattribute.php
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // USING SET ATTRIBUTES
    $sql = "SELECT * FROM players";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll();
    echo "<br> <pre>";
    print_r($result);
    */











    // READING THOUGH PREPARE STATEMENT
    // GET RID OF SQL INJECTION AND SECURE THE CODE
    // USING PREPARE STATEMENT
    // https://www.php.net/manual/en/pdo.prepared-statements.php
    // PDO::prepare — Prepares- a statement for execution and returns a statement object
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // USING SET ATTRIBUTES
    
    
    $idnum = 1;

    // NAME PARAMETER
    // $sql = "SELECT * FROM players WHERE id=:idnum";
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindParam(':idnum', $idnum);

    // POSITIONAL PARAMETER
    /*
    $sql = "SELECT * FROM players WHERE id=?";
    $stmt = $pdo->prepare($sql);
    // $stmt->bindParam( $idnum); //NOT NECESSARY RATHER WE CAN PASS PARAMETERS IN EXECUTE FUNCTION
    $stmt->execute([$idnum]);
    */


    // USING DOUBLE OPERATOR
    /*
    $club = "PSG";
    $sql = "SELECT * FROM players WHERE id=:idnum && club=:club";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idnum'=>$idnum, 'club'=>$club]);


    $result= $stmt->fetch();
    echo "<br> <pre>";
    print_r($result->name);
    */

    

  


} catch (PDOException $e) {
    ?> <script> console.log("Error: "+"<?php echo $e->getMessage(); ?> ") </script> <?php
    echo $e;
}
