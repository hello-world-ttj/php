<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a PHP program to find factorial of a number using function.</h1>
    <hr>
    <?php
    function factorial($num){
        $fact = 1;
        for($i=1;$i<=$num;$i++){
            $fact = $fact*$i;
        }
        return $fact;
    }
    $fact=factorial(5);
    echo "<h3>The Given number is 5</h3>";
    echo "<h3>Factorial of 5 = $fact</h3>";
    ?>
</body>
</html>