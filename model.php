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
             return $this->conn;
         }
     }

     /*function defie for insert table */
     public function insertTable($post){
         $name = $post['name'];
         $email = $post['email'];
         $sql = "INSERT INTO users(name,email)VALUES('$name','$email')";
         $result = $this->conn->query($sql);
         if($result){
             header('location:index.php?msg=ins');
         }else{
             echo "Error".$sql."<br>".$this->conn->error;
         }
     }
}
?>