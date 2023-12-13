<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a PHP script to demonstrate class and object.</h1>
    <hr>
    <?php
    class Fruit{
        public $name, $color;
        public function __construct ($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro (){
            echo "The fruit is {$this->name} and the color is {$this->color}.</br>"; 
        }
    }
    class Strawberry extends Fruit{
        public function message (){
            echo "Am I a fruit or a berry? </br>";
        }
    }
    $sb = new Strawberry ("Strawberry", "red");
    $sb->message ();
    $sb->intro ();
    ?>
</body>
</html>