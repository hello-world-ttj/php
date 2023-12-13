<?php 
    $iceCream = array("Vanila"=>"Milky","Chocolate"=>"Choco","Strawberry"=>"Berry","Pista"=>"Pista");
    echo"Before Sorting... <br>";
    print_r($iceCream);
    echo "<br>Sorted by value in descending order... <br>";
    arsort($iceCream);
    print_r($iceCream);
    echo "<br>Sorted by value in ascending order... <br>";
    asort($iceCream);
    print_r($iceCream);
    echo "<br>Sorted by key in ascending order... <br>";
    ksort($iceCream);
    print_r($iceCream);
    echo "<br>Sorted by key in descending order... <br>";
    krsort($iceCream);
    print_r($iceCream);
?>