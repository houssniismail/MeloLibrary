<?php
class DataBase{
    private $host = 'localhost';
    private $db_name = 'salon';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function connect(){
        $this->conn = null;

        try{
          $this->conn = new PDO('mysql:host='. $this->host . ';dbname=' . $this->db_name,
          $this->username,$this->password);
          $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //   echo "connect";
        }catch(PDOExeption $e){
           echo 'connection Error'.$e->getMessage();
        }
        return $this->conn;
    }
}
// $db = new DataBase();
// $db->connect();
?>