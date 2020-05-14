<?php

$host="localhost";
$user="root";
$pwd="";
$db="appproject";


$conn=mysqli_connect($host,$user,$pwd,$db) or die ("unable to connect");

$idEmp=$_POST['idForProj'];
$projname=$_POST['projName'];
$dateProj=$_POST['dateProj'];
$comments=$_POST['projComm'];




 $query5 = ("INSERT INTO Project (ID_employee, Project_name , Comments, Date) 
 VALUES ('$idEmp', '$projname', '$comments', '$dateProj')");
$result5 = mysqli_query($conn, $query5);

mysqli_close($conn);
?>