<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a PHP program to display the timestamp information of the last visit of a page using cookies.</h1>
    <hr>
    <?php
    setcookie("lastdate",date("m/d/y H:i:s"),time()+(30*24*60*60));
    if(isset($_COOKIE["lastdate"]))
    {
        $var=$_COOKIE["lastdate"];
        echo "Your last visit was $var";
        
    }
    else
    {
        echo "Welcome"."<br>";
    }
    ?>
</body>
</html>