<?php
// HEADERS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Post.php';

// INSTANTIATE DB AND CONNECT
$database = new Database();
$db = $database->connect();

// INSTANTIATE BLOG POST OBJECT
$post = new Post($db);

// GET ID FROM PARAMETERS
$post->id = isset($_GET['id']) ? $_GET['id'] : die();

//GET POST
$post->read_single();

// CREATE ARRAY
$post_arr = array(
    'id' => $post->id,
    'title' => $post->title,
    'body' => $post->body,
    'author' => $post->author,
    'category_id' => $post->category_id,
    'category_name' => $post->category_name,

);


// CONVERT ARRAY TO JSON DATA
print_r(json_encode(($post_arr)));