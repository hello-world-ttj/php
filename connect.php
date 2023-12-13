<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Develop PHP program to create a database.</h1>
    <hr>
    <?php 
        $server = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($server,$username,$password);
        if(!$conn){
            die("Connection error".mysqli_connect_error());
        }
        $sql = "CREATE DATABASE ttj";
        if(mysqli_query($conn,$sql)){
            echo "DATABASE CREATED SUCCESSFULLY...!";
        }else{
            echo "ERROR WHILE CREATING DATABASE...".mysqli_error($conn);
        }
        mysqli_close($conn);
?>
</body>
</html>