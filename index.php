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
    </div>
</body>
</html>