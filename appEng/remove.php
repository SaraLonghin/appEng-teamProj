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

 if($result4){
	echo("<br>eliminazione avvenuto correttamente");
} else{
	echo("<br>elimi9nazione non eseguito");
}
?>
