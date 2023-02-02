<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Method,Authorization, X-Requested-with');

include_once '../../config/DataBase.php';
include_once '../../models/Post.php';

$database = new DataBase();
$db = $database->connect();

$post = new Post($db);

$data = json_decode(file_get_contents("php://input"));

$post->email = $data->email;
$post->pass = $data->pass;


$post->creatuser($post->email, $post->pass);
?>