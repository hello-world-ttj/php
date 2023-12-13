<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Develop PHP program to insert values into the table.</h1>
    <hr>
    <?php 
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "ttj";
        $conn = mysqli_connect($server,$username,$password,$db);
        if(!$conn){
            die("Connection error...".mysqli_connect_error());
        }
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $sql = "INSERT into user(firstname,email,pass)values('$name','$email','$pass')";
        if (mysqli_query($conn,$sql)) {
            echo "Successfully Registered...!";
        }else{
            echo"Error while inserting...".mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>

