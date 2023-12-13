<?php 
    include("conn.php");
    $id = $_GET['id'];
    $sql = "DELETE from student  where rollno=$id";
    if($conn->query($sql)){
        header("Location: sview.php");
    }
    mysqli_close($conn);    
?>