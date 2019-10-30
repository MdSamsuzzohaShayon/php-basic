<?php
// HEADERS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');



include_once '../../config/Database.php';
include_once '../../models/Post.php';

// INSTANTIATE DB AND CONNECT
$database = new Database();
$db = $database->connect();

// INSTANTIATE BLOG POST OBJECT
$post = new Post($db);

//GET THE RAW POSTED DATA
$data = json_decode(file_get_contents("php://input"));

// SET ID TO UPDATE
$post->id = $data->id;


// DELETE POST
if ($post->delete()) {
    echo json_encode(
        array('message' => "post deleted")
    );
} else {
    echo json_encode(
        array('message' => "post not deleted")
    );
}
