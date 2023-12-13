<h2>Sorting</h2>
<?php 
$arr = array("Tijo"=>22,"Sijo"=>27);

echo "Age of Tijo is ",$arr["Tijo"],"<br>";

echo "Age of Sijo is ",$arr["Sijo"],"<br>";

foreach ($arr as $key => $value) {
    echo $key." = ".$value."<br>";
}

asort($arr);

print_r($arr);

arsort($arr);

print_r($arr);

ksort($arr);

print_r($arr);

krsort($arr);

print_r($arr);