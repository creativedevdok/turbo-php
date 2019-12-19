<?php 

class Car{ 
    
    function MoveWheels(){
        echo "Wheels in motion";
    }
    
    
    
    
    
    
    
}
    
    if(class_exists("Car")) {
        echo "it exist " . "<br>";
    } else  {
        echo "no";
    }
    
        if(method_exists("Car", "MoveWheels")) {
        echo "Method exist"  . "<br>";
    } else  {
        echo "no";
    }
    
    
////what i thought
//$newCar = Car();
//Car("MoveWheels");

//bmw is an object which is an object of class Car
$bmw = new Car();
$mercedes_benz = new Car();

//calling method of Car class
$bmw->MoveWheels();
$mercedes_benz->MoveWheels();






?>  
       
        
          
