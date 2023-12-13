<?php 
    $host = "localhost";
    $user = "root";
    $pwd  = "";
    $db   = "ttj";

    $conn = mysqli_connect($host,$user,$pwd,$db);
    if(!$conn){
        echo "Connection error".mysqli_connect_error();
    }

    $sql = "CREATE table employee(empid integer(10) primary key AUTO_INCREMENT, ename varchar(20), salary varchar(20))";

    if($conn->query($sql)){
        echo "Table created successfully...!";
    }else {
        echo "Error while table creation...!";
    }

    mysqli_close($conn);
?>