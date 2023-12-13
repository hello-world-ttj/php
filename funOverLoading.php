<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a PHP script to demonstrate function overloading.</h1>
    <hr>
    <?php
    class shape{
        function __call($name, $args)
        {
            if ($name == 'area')
            {
                switch (count($args))
                {
                    case 1: 
                        return 3.14 * $args[0]; 
                    case 2: 
                        return $args[0]*$args[1]; 
                }
            }
        }
    }
    $s = new Shape; echo($s->area(3));
    echo "</br>";
    echo ($s->area(4, 3));
    ?>
</body>
</html>