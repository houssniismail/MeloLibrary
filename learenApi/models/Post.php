<?php

class Post{
// database 
private $conn;
private $table='admin';

public function __construct($db){
    $this->conn = $db;
}

public function read(){
    $query = 'SELECT * FROM ' . $this->table;

    $stmt = $this->conn->prepare($query);

    $stmt->execute();

    return $stmt;
}
public function read_single(){
    $query = 'SELECT * FROM '. $this->table .' WHERE id = ?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $this->email = $row['email'];
    $this->pass = $row['pass'];
}
// add user
public function creatuser(){
   //add user
    $query = 'INSERT INTO' . $this->table . 'SET (email = :email, pass = :pass)';

    $stmt = $this->conn->prepare($query);

    $this->email;

}
}
?>