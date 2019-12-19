<?php 

class Car{ 
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    function MoveWheels(){
        echo "Wheels in motion" . "<br>";
        //this references car class
        $this->wheels = 3;
    }
    
        function CreateDoors(){
        $this->doors = 4;
            echo "doors are now set to " . $this->doors . "<br>";
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
//no $dollarsign for variable wheels in class Cars
echo $bmw->wheels . "<br>";
//override default wheels
$bmw->wheels = 8;
echo "wheels are now set to " . $bmw->wheels . "<br>";

$bmw->MoveWheels();
echo "wheels are now set to " . $bmw->wheels . "<br>";

$truck = new Car();
echo $truck->wheels = 10 . "<br>";

echo "doors are now set to " . $truck->doors = 6;


?>  
       
        
          
