<?php 
    $host = "localhost";
    $user = "root";
    $pwd  = "";
    $db   = "ttj";

    $conn = mysqli_connect($host,$user,$pwd,$db);
    if(!$conn){
        echo "Connection error".mysqli_connect_error();
    }

    $sql = "SELECT * from employee";

    $res = $conn->query($sql);

    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            $id = $row['empid'];
            echo "Name: ".$row['ename']." --- Salary: ".$row['salary']."&nbsp; &nbsp;<a href='eedit.php?id=$id'>Edit</a> &nbsp; <a href='edelete.php?id=$id'>Delete</a> <br>";
        }
    }

    mysqli_close($conn);
?>