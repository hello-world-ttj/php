<?php 
    $host = "localhost";
    $username = "root";
    $pwd = "";
    $db = "ttj";
    $conn = mysqli_connect($host,$username,$pwd,$db);
    if (!$conn) {
        echo "Connection error".mysqli_connect_error();
    }
    $sql = "SELECT * from user";
    $res = mysqli_query($conn,$sql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            echo "Name: ".$row['firstname']."  Email: ".$row['email']."<a href='edit.php?id=$row[id]'>Edit</a>    <a href='delete.php?id=$row[id]'>Delete</a> <br>";
        }
    }

    mysqli_close($conn);
?>