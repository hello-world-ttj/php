<?php
for($i=0;$i<=$_POST['AFname'];$i++)
{echo $i."X".$_POST['Alname']."=".$i*$_POST['Alname']."<br>";
}	


//echo $_POST['AFname'];
$check=$_POST['AFname'];
echo json_encode($check);
?>