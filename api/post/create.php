<?php
// HEADERS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
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

$post->title = $data->title;
$post->body = $data->body;
$post->author = $data->author;
$post->category_id = $data->category_id;

// CREATE THE POST
if ($post->create()) {
    echo json_encode(
        array('message' => "post created")
    );
} else {
    echo json_encode(
        array('message' => "post not created")
    );
}
