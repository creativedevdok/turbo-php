<?php 

class Car{ 
    //access
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
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
    
    function showProperty(){
        echo "this is the hoods property = " . $this->hood . "<br>";
        
    }
    
      function showEnginePropertyPrivate(){
        echo "this is the bmw engine property = " . $this->engine . "<br>";
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
//creates error
//$bmw->hood;
echo "<br>";
echo "<br>";
$bmw->showProperty();

class Semi extends Car{
    
        function showSemiProperty(){
        echo "this is the semi hoods property = " . $this->hood . "<br>";
        }

       function showEngineProperty(){
        echo "this is the semi hoods property = " . $this->engine . "<br>";
        }
}
$semi = new Semi();
$semi->showSemiProperty();
try {
   $semi->showEngineProperty();
    throw new Exception();
} catch (Exception $e) {
    print "something went wrong. ";
} finally {
    print "This is not allowed becuase of private access"  . "<br>";
}

$bmw->showEnginePropertyPrivate();

?>  
       
        
          
