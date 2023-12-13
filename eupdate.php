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
    $ename = $_POST['ename'];
    $sal = $_POST['salary'];

    $sql = "UPDATE employee set ename='$ename', salary='$sal' where empid=$id";

    if($conn->query($sql)){
        echo "Value Updated successfully...!";
        header('Location: eview.php');
    }else {
        echo "Error while value updation...!";
    }

    mysqli_close($conn);
?>