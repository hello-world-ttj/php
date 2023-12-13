<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a PHP script to demonstrate access specifiers.</h1>
    <hr>
    <?php
        // Class definition 
        class Automobile {
        // Declare properties 
            private $ownername; 
            public $fuel;
            public $engine; 
            public $transmission; 
            protected $model;
        }
        class Car extends Automobile {
            // Constructor
            public function __construct(){
            echo 'The class "'. __CLASS__ .'" was initiated!<br>'; 
            }
        }
        // Create an object from Automobile class 
        $automobile = new Automobile;
        //Attempt to set $automobile object properties 
        $automobile->fuel = 'Petrol'; // ok
        $automobile->engine = '1500 cc'; // fatal error 
        $automobile->transmission = 'Manual'; // fatal error
        // Create an object from Car class 
        $car = new Car;
        // Attempt to set $car object properties 
        $car->fuel = 'Diesel'; // ok
        $car->engine = '2200 cc'; // fatal error 
        $car->transmission = 'Automatic'; // undefined
    ?>
</body>
</html>