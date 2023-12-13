<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Develop a PHP program to update a particular value in the table.</h1>
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
        $fname = $_POST['firstname'];
        $email = $_POST['email'];
        $sql = "UPDATE user SET  email='$email' where firstname='$fname'";
        if (mysqli_query($conn,$sql)) {
            echo "Successfully Updated...!";
        }else{
            echo"Error while Updating...".mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>

