<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a PHP program to find whether an entered year is leap year or not using function.</h1>
    <hr>
    <form method="POST" >
        <h3>Enter the year:</h3>
        <input type="text" name="year" id="year">
        <input type="submit" value="Submit">
    </form>
    <br>
    <?php
        if($_POST){
            $year = $_POST["year"];
        //Entered input is valid or not!
        function leapYear($year){
            if(!is_numeric($year)){
            echo "Please enter Valid Input";
        }
        //Condition to check the year is leap year or not
        if (($year%400==0) or ($year%4==0) and ($year%100!=0)) {
            return 1;
        }else {
            return 0;
        }
        }
        $result = leapYear($year);
        if ($result==1) {
            echo "<h3>$year is a Leap year</h3>";
        }else {
            echo "<h3>$year is not a Leap year</h3>";
        }
        }
        
    ?>
</body>
</html>