<?php 
    include("conn.php");
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $mark = $_POST['mark'];
    $sql = ("INSERT into student(rollno,name,course,mark) values('$rollno','$name','$course','$mark')");
    if($conn->query($sql)){
        echo "Value Inserted...!";
        header("Location: sview.php");
    }else {
        echo "Error...!";
    }
    mysqli_close($conn);
?>