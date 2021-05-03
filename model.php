 <?php
 /* Database Connection*/

 class Model{
     private $servername = 'localhost';
     private $username = 'root';
     private $password = '';
     private $dbname = 'blog';
     private $conn;

    public function __construct(){
         $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
         if($this->conn->connect_error){
             echo 'Connection Failed';
         }else{
             echo 'Connected';
         }
     }
}

new Model();

?>