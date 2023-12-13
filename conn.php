<?php 
    $host = "localhost";
    $user = "root";
    $pwd  = "";
    $db   = "ttj";
    
    $conn = mysqli_connect($host,$user,$pwd,$db);

    if(!$conn){
        echo "Connection error...".mysqli_connect_error();
    }
?>