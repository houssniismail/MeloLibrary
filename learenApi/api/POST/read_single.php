<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/DataBase.php';
include_once '../../models/Post.php';

$database = new DataBase();
$db = $database->connect();

$client = new Client($db);

$client->id = isset($_GET['id']) ? $_GET['id'] : die();

$client->read_single();

$client_arr = array(
   'id'=>$client->id,
   'email'=>$client->email,
   'pass'=>$client->pass
);
print_r(json_encode($client_arr))
?>