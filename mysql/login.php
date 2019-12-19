<?php
//recieve data from form from isset checking for post super global with value of submit
if(isset($_POST['submit'])) {
 $username = $_POST['username'];
 $password = $_POST['password'];
    
//    if($username && $password){
//        echo $username;
//        echo $password;
//    } else {
//        echo "This field cannot be blank";
//    }
    
    
$connection = mysqli_connect('localhost', 'root', '123456', 'loginapp');
if($connection){
    echo "we are connected";
} else {
    die("Database connection failed");
}
}





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
               <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>









<?php 












?>  
       
        
          
</body>
</html>
