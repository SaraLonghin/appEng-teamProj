<?php

$host="localhost";
$user="root";
$pwd="";
$db="appproject";


$conn=mysqli_connect($host,$user,$pwd,$db) or die ("unable to connect");


$projRemove=$_POST['removeP'];



 $query6 = ("DELETE FROM Project  
 WHERE Project_name = '$projRemove'");

$result6 = mysqli_query($conn, $query6);


 if($result6){
	echo("<br>eliminazione avvenuto correttamente");
} else{
	echo("<br>eliminazione non eseguito");
}

mysqli_close($conn);

?>

