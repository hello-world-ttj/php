<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Write a PHP program to create a registration form and demonstrate the server-side validation process for name exclusively.</h1>
    <hr>
    <?php
        // define variables and set to empty values
        $nameErr =  "";
        $name =  "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        } 
        else 
        {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        }
        }
        
        
        }
        
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>
        
        <h2>PHP Name Validation Example</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
        </form>
        
        <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        ?>
</body>
</html>