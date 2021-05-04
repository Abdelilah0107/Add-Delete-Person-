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

     /*function define for insert table */
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
// function define for update table
     public function updateTable($post){
        $name = $post['name'];
        $email = $post['email'];
        $editid =$post['hid'];
        $sql = "UPDATE users SET name='$name' , email='$email' WHERE id='$editid'";
        $result = $this->conn->query($sql);
        if($result){
            header('location:index.php?msg=ups');
        }else{
            echo "Error".$sql."<br>".$this->conn->error;
        }
    }
// function define for delete

    public function deleteTable($delid){
        $sql = "DELET FROM users WHERE id='$delid'"
        $result = 
    }



     public function showTable(){
         $sql = "SELECT * FROM users";
         $result = $this->conn->query($sql);
         if($result->num_rows>0){
             while($row = $result->fetch_assoc()){
                 $data[] = $row;
             }
             return $data;
         }
     }
     public function showTableById($editid){
         $sql = "SELECT * FROM users WHERE id =$editid";
         $result = $this->conn->query($sql);
         if($result->num_rows==1){
             $row = $result->fetch_assoc();
             return $row;
         }
     }
}
?>