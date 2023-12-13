<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a PHP program to demonstrate the working of AJAX.</h1>
    <hr>
    <label for="fname">no1:</label>
    <input type="text" id="fname" name="fname"><br><br> 
    <label for="lname">no2:</label>
    <input type="text" id="lname" name="lname"><br><br> 
    <input type="submit" value="Submit" onclick="sample()"> 
    <div id="result">
        
    </div>
    <script>
        function sample(){
            var Fname=$("#fname").val();
            var lname=$("#lname").val();
            /*$.post("sample2.php", {
                'AFname':Fname,
                'Alname':lname }, 
                function(data){ 
                    document.getElementById('result').innerHTML = data;
                });*/
            $.ajax({
                type: "POST",
                url: 'sample.php',
                data: {
                    'AFname':Fname,
                    'Alname':lname
                }, 
                success: function(data){
                    document.getElementById('result').innerHTML = data; 
                },
                error: function(xhr, status, error){
                    alert(error);
                } 
            });
        }
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>