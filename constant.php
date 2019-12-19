<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    
     
          <?php 
    
  //first parameter is the name and the second is the value  
define("NAME", 1000);
    
    echo NAME;
    
    // Works as of PHP 5.3.0
 
const CONSTANT = 'Hello World';
 
 
echo CONSTANT;
 
 echo "<br>";
    echo "<br>";
// Works as of PHP 5.6.0
 
const ANOTHER_CONST = CONSTANT.'; Goodbye World';
 
echo ANOTHER_CONST;
 
 echo "<br>";
    echo "<br>";
    
const ANIMALS1 = array('dog', 'cat', 'bird');
 
echo ANIMALS1[1]; // outputs "cat"
 
 echo "<br>";echo "<br>";
// Works as of PHP 7
 
define('ANIMALS', array(
 
'dog',
 
'cat',
 
'bird'
 
));
 
echo ANIMALS[1]; // outputs "cat"
    
    ?>  
       
        
          
</body>
</html>
