
<?php

    $con=mysqli_connect('localhost','root','','appproject');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>