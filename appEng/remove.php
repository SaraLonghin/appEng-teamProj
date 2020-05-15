<?php

$host="localhost";
$user="root";
$pwd="";
$db="appproject";


$conn=mysqli_connect($host,$user,$pwd,$db) or die ("unable to connect");

$idToRemove=$_POST['idRemove'];



 $query4 = ("DELETE FROM employee  
 WHERE employee.id= $idToRemove");
$result4 = mysqli_query($conn, $query4);


header("location:dirlog.php");
mysqli_close($conn);
?>
