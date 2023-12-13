<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a PHP script to implement constructor and destructor.</h1>
    <hr>
    <?php
        class Person{
            private $fname;
            private $lname;
            public function __construct($fname, $lname){
                echo "Initialising the object...<br/>";
                $this->fname = $fname;
                $this->lname = $lname;
            }
            public function __destruct(){
                echo "Destroying Object...";
            }
            public function showName(){
                echo "My name is: " . $this->fname . "." . $this->lname . "<br/>"; 
            }
        }
    $ttj = new Person("hello_world", "ttj");
    $ttj->showName();
    ?>
</body>
</html>