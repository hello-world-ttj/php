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
    <h1>Write a PHP program to create a registration form and demonstrate the server-side validation process for email and URL exclusively.</h1>
    <hr>
    <?php
        // define variables and set to empty values
        $emailErr =  $websiteErr = "";
        $email =  $website = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        } 
        else {
        $email = $_POST["email"];
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        }
        }
        
        if (empty($_POST["website"])) {
        $website = "";
        } 
        else {
        $website = $_POST["website"];
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        /*if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
        }
        }*/
        
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
        $websiteErr = "Invalid url format";
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
        
        <h2>PHP Form Validation Example</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
        </form>
        
        <?php
        echo "<h2>Your Input:</h2>";
        echo $email;
        echo "<br>";
        echo $website;
        
    ?>

</body>
</html>