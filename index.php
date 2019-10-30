<?php

$host = 'localhost';
$user = 'shayon';
$password = 'Shayon1234';
$dbname = 'pdoposts';

// SETUP DSN OR DATA SOURCE NAME
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// CREATE A PDO INSTANCE
$pdo = new PDO($dsn, $user, $password);
// DON'T NEED TO SET DEFAULT OBJECT WHEN FETCH BY OBJECT OR ASSOC
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// THERE ARE TWO WAYS TO MAKE QUERIES
// $stmt = $pdo->query('SELECT * FROM post');

//FETCHING TITLE DATA FROM TABLE
/*
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['title'] . '<br>';
    }*/


// FETCHING OBJECT
/*
    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
        echo $row->title . '<br>';
    }
    */

/*
    while($row = $stmt->fetch()){
        echo $row->title . '<br>';
    }
    */

// PREPARED STATEMENTS 
// THERE IS TWO MAIN METHOD (PREPARE AND EXECUTE1)

// UNSAFE WAY
// $sql = "SELECT * FROM post WHERE author = '$author'";






// USER INPUT
$author = "Shayon";
$is_published = true;
$id = 1;






// FETCH MULTIPLE POST
// POSITIONAL PARAMS
/*
// $sql = 'SELECT * FROM post WHERE author = ?';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $posts = $stmt->fetchAll();


//NAMED PARAMS
$sql = 'SELECT * FROM post WHERE author = :author && is_published= :is_published';
$stmt = $pdo->prepare($sql);
$stmt->execute(['author' => $author, 'is_published' => $is_published]);
$posts = $stmt->fetchAll();

// SEE ALL DETAILS
// var_dump(($posts));

foreach ($posts as $post) {
    echo $post->title . '<br>';
}
*/



// FETCH SINGLE POST
/*
$sql = 'SELECT * FROM post WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$post = $stmt->fetch();

echo $post->body; */


// GET ROW COUNT
/*
$stmt = $pdo->prepare('SELECT * FROM post WHERE author = ?');
$stmt->execute([$author]);
$postCount = $stmt->rowCount();
echo $postCount;
*/





// INSERT DATA, THIS CAN COME FROM FORM
/*
$title = "Post five";
$body = 'This is post five';
$author = "Shayon";


$sql = 'INSERT INTO post(title, body, author) VALUES(:title, :body, :author)';
$stmt = $pdo->prepare($sql);
$stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
echo 'Post added';
*/



// UPDATE DATA
/*
$id = 1;
$body = 'This is updated post';


$sql = 'UPDATE post SET body = :body WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['body' => $body, 'id' => $id]);
echo 'Post Updated';
*/


// DELETE DATA
/*
$id = 3;
$body = 'This is updated post';


$sql = 'DELETE FROM post WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
echo 'Post Deleted';
*/


// SEARCH DATA
/*
$search = "%f%";
$sql = 'SELECT * FROM post WHERE title LIKE ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$posts = $stmt->fetchAll();
foreach ($posts as $post) {
    echo $post->title . '<br>';
}
*/


?>

