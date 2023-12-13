
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab</title>
</head>
<body>
    <h1>PHP Program to create an association array and sort in ascending and descending order w. r. t key & values.</h1>
    <hr>
    <?php
    $age = array("Peter"=>35,"Ben"=>50,"Joe"=>43);
    echo "Age of Peter is ".$age["Peter"];
    echo "<br>";
    echo "\$age[Ben] = ",$age["Ben"];
    echo "<br>";
    echo "\$age[Joe] = ",$age["Joe"];

    echo"<br>";
    echo "Before sorting <br>";

    echo "------------------------------------<br>";

    foreach ($age as $key => $value) {
        echo $key ." = ". $value,"<br>";
    }
    //asort()
    echo "**********************************************************************<br>";
    echo "Value After sorting Acs";
    echo "<br>------------------------------------<br>";
    asort($age);
    print_r($age);
    //arsort()
    echo "<br>------------------------------------<br>";
    echo "Value After sorting Dcs";
    echo "<br>------------------------------------<br>";
    arsort($age);
    print_r($age);
    //ksort()
    echo "<br>------------------------------------<br>";
    echo "Key After sorting Acs";
    echo "<br>------------------------------------<br>";
    ksort($age);
    print_r($age);
    //krsort()
    echo "<br>------------------------------------<br>";
    echo "Key After sorting Dcs";
    echo "<br>------------------------------------<br>";
    krsort($age);
    print_r($age);
    echo "<br>**********************************************************************<br>";
    ?>
</body>
</html>
