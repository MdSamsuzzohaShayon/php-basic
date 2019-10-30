<?php
// HEADERS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Category.php';

// INSTANTIATE DB AND CONNECT
$database = new Database();
$db = $database->connect();

// INSTANTIATE CATEGORY OBJECT
$category = new Category($db);

// BLOG POST QUERY
$result = $category->read();

// GET ROW COUNT
$num = $result->rowCount();

//CHECK IF ANY CATEGORY
if ($num > 0) {
    // POST ARRAY
    $cat_arr = array();
    $cat_arr['data'] = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $cat_item = array(
            'id' => $id,
            'name' => $name
        );
        // PUSH TO THE DATA
        array_push($cat_arr['data'], $cat_item);
    }
    //  TURN IT INTO JSON
    echo json_encode($cat_arr);
} else {
    echo json_encode(
        array('message' => 'No Categories Found')
    );
}
