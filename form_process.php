<?php 
    
    
    

if(isset($_POST['submit'])){
    
    $name = ["Edwin", "Maria", "Paul", "Jane", "Mohammed", "Sammy"];
    
    $minimum = 5;
    $maximum = 10;
   $username = $_POST['user'];
    $password = $_POST['pass'];
    
  //  echo "Hello " . $password;
 //   echo " Your password is " . $username;
    
    if(strlen($username) < $minimum) {
        echo "Username has to be longer than";
    }
    
       if(strlen($username) > $maximum) {
        echo "Username cannot be that long";
    }
    
    if(!in_array($username, $name)) {
        echo "Sorry you are not allowed!";
    } else {
        echo "Welcome validated user!";
    }
    
    
}












?>  
       
        
          
