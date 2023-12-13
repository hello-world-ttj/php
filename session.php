<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a program to display the page count using session.</h1>
    <hr>
    <?php
    session_start();
    if(isset($_SESSION['count']))
    {
    $_SESSION['count']+=1;
    }
    
    else
    {
    $_SESSION['count']=1;
    }
    $msg="You have visited this page: ".$_SESSION['count']." times in this session";
    ?>
    <html>
    <body>
    <?php echo $msg;
    ?>
</body>
</html>