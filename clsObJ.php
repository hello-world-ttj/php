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
    class Myclass
    {
        public $font_size ="18px";
        public $font_color = "blue";
        public $string_name = "MACFAST"; 
        public function custom_print(){
            echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_name."</p>";
        } 
    }
    $f = new MyClass;
    echo $f->custom_print();
    ?>
</body>
</html>