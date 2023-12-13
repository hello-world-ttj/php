<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Develop a PHP program to create table in a database.</h1>
    <hr>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="ttj";
        //create connection
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        //check connection
        if(!$conn)
        {
            die("Connection failed: ".mysqli_connect_error());  
        }
        //create table
        $sql="CREATE TABLE user(id INT(6) unsigned auto_increment primary key,
        firstname varchar(30) not null,email varchar(30) not null,pass varchar(50),
        reg_date timestamp default current_timestamp on update current_timestamp)";
        if(mysqli_query($conn, $sql))
        {
            echo "Table MyGuests created successfully";
        }
        else
        {
            echo "Error creating table: ".mysqli_error($conn); 
        }

        mysqli_close($conn);
    ?>
</body>
</html>

