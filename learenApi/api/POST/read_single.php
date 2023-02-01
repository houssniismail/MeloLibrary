<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/DataBase.php';
include_once '../../models/Post.php';

$database = new DataBase();
$db = $database->connect();

$user = new Post($db);

$user->id = isset($_GET['id']) ? $_GET['id'] : die();

$user->read_single();

$user_arr = array(
   'id'=>$user->id,
   'email'=>$user->email,
   'pass'=>$user->pass
);
print_r(json_encode($user_arr))


?>