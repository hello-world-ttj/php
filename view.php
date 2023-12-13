<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Develop a PHP program to view records from the table.</h1>
    <hr>
    <?php 
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "ttj";
        $conn = mysqli_connect($server,$username,$password,$db);
        if(!$conn){
            die("Connection error...".mysqli_connect_error());
        }
        $sql = "SELECT firstname,email from user";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["firstname"]. " ----- Email: " . $row["email"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    ?>
</body>
</html>

