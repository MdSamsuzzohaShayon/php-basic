<?php
// HEADERS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
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

$post->title = $data->title;
$post->body = $data->body;
$post->author = $data->author;
$post->category_id = $data->category_id;

// UPDATE POST
if ($post->update()) {
    echo json_encode(
        array('message' => "post updated")
    );
} else {
    echo json_encode(
        array('message' => "post not updated")
    );
}
