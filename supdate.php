<?php 
    include("conn.php");
    $id = $_GET['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $mark = $_POST['mark'];
    $sql = "UPDATE student set name='$name',course='$course',mark='$mark' where rollno=$id";
    if($conn->query($sql)){
        header("Location: sview.php");
    }
    mysqli_close($conn);    
?>