<?php 
    include("conn.php");
    $sql = "CREATE table student(rollno int(10) primary key,name varchar(20),course varchar(20),mark varchar(20))";
    if($conn->query($sql)){
        echo "Table created...!";
    }else {
        echo "Error...!";
    }
    mysqli_close($conn);
?>