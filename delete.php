<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Develop a PHP program to delet a particular value in the table.</h1>
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
        $id = $_GET['id'];
        $sql = "DELETE FROM user where id='$id'";
        if (mysqli_query($conn,$sql)) {
            echo "Successfully Deleted...!";
        }else{
            echo"Error while Deleting...".mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>

