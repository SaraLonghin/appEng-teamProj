<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Director']))
    {
            
                header("location:dirindex.php");
           
       }
    
    else if(isset($_POST['Employee']))
         {
            
                header("location:empindex.php");
           
       }
else
    {
        echo 'Something fishy is going on, please wait';
    }

?>