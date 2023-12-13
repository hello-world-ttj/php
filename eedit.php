<?php 
    $host = "localhost";
    $user = "root";
    $pwd  = "";
    $db   = "ttj";

    $conn = mysqli_connect($host,$user,$pwd,$db);
    if(!$conn){
        echo "Connection error".mysqli_connect_error();
    }

    $id = $_GET['id'];

    $sql = "SELECT * from employee where empid='$id'";

    $res = $conn->query($sql);

    while($row = $res->fetch_assoc()){
        $ename = $row['ename'];
        $sal = $row['salary'];
    }

    mysqli_close($conn);
?>

<form action="eupdate.php?id=<?php echo $id?>" method="post">
    <label for="emp_name">Name</label>
    <input type="text" name="ename" value=<?php echo $ename?>>
    <label for="emp_name">Salary</label>
    <input type="text" name="salary" value=<?php echo $sal?>>
    <input type="submit" value="Update">
</form>
