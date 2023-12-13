<?php 
    include("conn.php");
    $sql = "SELECT * from student";
    $res = $conn->query($sql);
    if($res->num_rows > 0){
        while ($row = $res->fetch_assoc()) {
            echo "Roll no: ".$row['rollno']." Name: ".$row['name']." Course: ".$row['course']." Mark: ".$row['mark']."&nbsp; <a type='submit' href='sedit.php?id={$row['rollno']}'>Edit</a> &nbsp; <a type='submit' href='sdelete.php?id={$row['rollno']}'>Delete</a> <br>";
        }
    }
    mysqli_close($conn);
?>