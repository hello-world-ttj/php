<?php 
    $host = "localhost";
    $user = "root";
    $pwd  = "";
    $db   = "ttj";

    $conn = mysqli_connect($host,$user,$pwd,$db);
    if(!$conn){
        echo "Connection error".mysqli_connect_error();
    }

    $id = $_GET['id'];

    $sql = "DELETE from employee where empid='$id'";

    if($conn->query($sql)){
        echo "Value deleted successfully...!";
        header('Location: eview.php');
    }else {
        echo "Error while value deletion...!";
    }

    mysqli_close($conn);
?>