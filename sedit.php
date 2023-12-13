<?php 
    include("conn.php");
    $id = $_GET['id'];
    $sql = "SELECT * from student where rollno='$id'";
    $res = $conn->query($sql);
    while($row = $res->fetch_assoc()){
        $name = $row['name'];
        $course = $row['course'];
        $mark = $row['mark'];
    }
    mysqli_close($conn);    
?>

<form action="supdate.php?id=<?php echo $id?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" value=<?php echo $name?>>
    <label for="course">Course:</label>
    <input type="text" name="course" value=<?php echo $course?>>
    <label for="mark">Mark:</label>
    <input type="text" name="mark" value=<?php echo $mark?>>
    <input type="submit" value="Update">
</form>