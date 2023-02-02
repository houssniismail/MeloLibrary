<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Method,Authorization, X-Requested-with');

include_once '../../config/DataBase.php';
include_once '../../models/Client.php';

$database = new DataBase();
$db = $database->connect();

$Client = new Client($db);

$data = json_decode(file_get_contents("php://input"));

$Client->nom = $data->nom;
$Client->prenom = $data->prenom;
$Client->Phon = $data->Phon;
$Client->referece = $data->referece;


$Client->creatClien($Client->nom,$Client->prenom,$Client->Phon,$Client->referece);
?>