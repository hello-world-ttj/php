<?php 
    $host = "localhost";
    $user = "root";
    $pwd  = "";
    $db   = "ttj";

    $conn = mysqli_connect($host,$user,$pwd,$db);
    if(!$conn){
        echo "Connection error".mysqli_connect_error();
    }

    $ename = $_POST['ename'];
    $salary = $_POST['salary'];
    $sql = "INSERT into employee(ename,salary) values('$ename','$salary')";

    if($conn->query($sql)){
        echo "Value inserted successfully...!";
        header('Location: eview.php');
    }else {
        echo "Error while value insertion...!";
    }

    mysqli_close($conn);
?>