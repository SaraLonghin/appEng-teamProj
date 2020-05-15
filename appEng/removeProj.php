<?php

$host="localhost";
$user="root";
$pwd="";
$db="appproject";


$conn=mysqli_connect($host,$user,$pwd,$db) or die ("unable to connect");


$projRemove=$_POST['removeP'];
$empRemove=$_POST['removeE'];



 $query6 = ("DELETE FROM Project  
 WHERE ID_Employee = '$empRemove' AND Project_name = '$projRemove'");

$result6 = mysqli_query($conn, $query6);


header("location:dirlog.php");
mysqli_close($conn);
?>
