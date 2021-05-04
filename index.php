<?php
include 'model.php';
$obj = new Model();
// insert table
if(isset($_POST['submit'])){
     $obj->insertTable($_POST);
}
// update table
if(isset($_POST['update'])){
    $obj->updateTable($_POST);
}
if(isset($_GET['deleteid'])){
    $delid = $_GET['deleteid'];
    $obj->deleteTable($delid);
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h2 class="text-center text-info">Blog Add Person</h2>
    <div class="container">
    <?php

    if(isset($_GET['msg']) AND $_GET['msg']=='ins'){
        echo '<div class="alert alert-primary" role="alert">
             Table Inserted Successfully..!
             </div>';
    }

    if(isset($_GET['msg']) AND $_GET['msg']=='ups'){
        echo '<div class="alert alert-primary" role="alert">
             Table Updated Successfully..!
             </div>';
    }
    if(isset($_GET['msg']) AND $_GET['msg']=='del'){
        echo '<div class="alert alert-primary" role="alert">
             Table Deleted Successfully..!
             </div>';
    }

    ?>
    <?php
          // Update
    if(isset($_GET['editid'])){
           $editid = $_GET['editid'];
           $mytable = $obj->showTableById($editid);
           ?>     
    <!-- Update -->
    <form action="index.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $mytable['name'];?>" placeholder="Enter Your Name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $mytable['email'];?>" placeholder="Enter Your Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="hidden" name="hid" value="<?php echo $mytable['id'];?>">
                <input type="submit" name="update" value="Update" class="btn btn-info">
            </div>
    </form>
    <?php
        }else{
    ?>
        <form action="index.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter Your Email" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-info">
            </div>
        </form>
        <?php  }    ?>
        <h2 class="text-center text-danger">Create table</h2>
        <table class="table table-bordered">
             <tr class="bg-primary text-center">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
             </tr>  
             <?php 
            //  show table
            $data = $obj->showTable();
            $sno=1;
            foreach($data as $value){
                ?>
            <tr class="text-center">
               <td><?php echo $sno++; ?></td>
               <td><?php echo $value['name']; ?></td>
               <td><?php echo $value['email']; ?></td>
               <td>
                  <a href="index.php?editid=<?php echo $value['id'];?>" class="btn btn-info">Edit</a>
                  <a href="index.php?deleteid=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>
               </td>
            </tr>
            <?php
            }

             ?>
        </table>
    </div>
</body>
</html>