<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>Write a PHP program to show the use of file handling functions.</h1>
    <hr>
    <?php
    //use of readfile
    echo readfile("fileread.txt"); //opening file in write mode 
    $myfile = fopen("sample.txt", "w") or die("Error"); 
    $txt ="Hello World\n"; 
    echo "<br>";
    //writing to file 
    fwrite($myfile,$txt);
    $txt1= "Its me TTJ \n"; 
    fwrite($myfile,$txt1);
    echo "<br>";
    echo readfile("sample.txt");
    echo "<br>";
    fclose($myfile);
    //using fread 
    $myfile1=fopen("file1.txt","r");
    echo fread($myfile1, filesize("file1.txt")); 
    echo "<br>";
    echo "<br>";
    fclose($myfile1);
    //copying contents of one file to another 
    copy("file1.txt", "target.txt"); 
    $myfile2=fopen("target.txt","r");
    echo "File copied.The copied contents are: "; 
    echo fread($myfile2, filesize("target.txt")); 
    echo "<br>";
    fclose($myfile2);
    ?>
</body>
</html>