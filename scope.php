<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    
     
          <?php 
    
    $x = "outside";
    
    function convert() {
        //must call global
        global $x;
        $x = "inside";
    }
    
    echo $x;
    echo "<br>";
    convert();
    echo $x;
    
    
    ?>  
       
        
          
</body>
</html>
