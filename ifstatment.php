<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    
     
          <?php 
    $number1 = 10;
    if($number1 < 10){
        echo "$number1 is less than 10";
    } elseif($number1 > 10) {
        echo"no $number1 is not less than 10 and is in fact greater than 10";
    } else {
        echo "your number must equal 10";
    }
    echo "<br>";
    echo "<br>";
    
    $name = 'Dan';
    echo "$name";
    if($name === 'Dan'){
        
       echo "<br>" . "Yup your name is Dan" ;
        
    } elseif($name !== "Dan"){
        echo "<br>" . "Nope your name is not Dan" ;
    }
    
    
    ?>  
       
        
          
</body>
</html>
