<?php 
    $host = "localhost";
    $username = "root";
    $pwd = "";
    $db = "ttj";
    $conn = mysqli_connect($host,$username,$pwd,$db);
    if (!$conn) {
        echo "Connection error".mysqli_connect_error();
    }
    $id = $_GET['id'];
    $sql = "SELECT firstname,email from user where id ='$id'";
    $result = $conn->query($sql);
    while($res = $result->fetch_assoc())
    {
    $name = $res['firstname'];
    $email = $res['email'];
    }
?>
<form action='update.php' method="post">
        <label for="name">Email</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="email" value=<?php echo $email?>><br><br>
        <input type="hidden" name="firstname" value=<?php echo $name?>>
        <input type="submit" value="Update">
</form>