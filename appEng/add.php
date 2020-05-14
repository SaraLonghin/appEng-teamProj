<?php

$host="localhost";
$user="root";
$pwd="";
$db="appproject";


$conn=mysqli_connect($host,$user,$pwd,$db) or die ("unable to connect");

$id=$_POST['idEmployee'];
$nameEmp= $_POST['employee'];
$surnEmp= $_POST['surEmployee'];
$date=$_POST['dateEmployee'];
$passass=$_POST['passass'];
$contact=$_POST['contactEmployee'];
$dept=$_POST['departmentEmployee'];





 $query3 = ("INSERT INTO employee (id, name , surname, dob, pass, contact, department ) 
 VALUES ('$id', '$nameEmp','$surnEmp', '$date','$passass', '$contact', '$dept' )");
$result3 = mysqli_query($conn, $query3);

 if($result3){
	echo("<br>Inserimento avvenuto correttamente");
} else{
	echo("<br>Inserimento non eseguito");
}
?>
?>