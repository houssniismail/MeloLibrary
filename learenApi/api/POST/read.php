<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/DataBase.php';
include_once '../../models/Post.php';

$database = new DataBase();
$db = $database->connect();

$post = new Post($db);

$result = $post->read();

$num = $result->rowCount();

if($num >0){
    $users_arr = array();
    $users_arr['data'] = array();
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $user_item = array(
          'id'=>$id,
          'email'=>$email,
          'password'=>$pass
        );
        array_push($users_arr['data'],$user_item);
    }
    echo json_encode($users_arr);
}else{
   echo json_encode(
    array('message' => 'No Users found')
   );
   
}
?>