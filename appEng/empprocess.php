<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
            $query="select * from employee where name='".$_POST['UName']."' and pass='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:emplog.php");
            }
            else
            {
                header("location:empindex.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    
    else
    {
        echo 'Something fishy is going on, please wait';
    }

?>