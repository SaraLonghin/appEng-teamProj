<?php
$host="localhost";
    $user="root";
    $pwd="";
    $db="appproject";
   $idForProj=$_POST['find'];
    
    $conn=mysqli_connect($host,$user,$pwd,$db) or die ("unable to connect");
    
    
    $query2= "SELECT Project.Project_name as projname, Project.Comments as projcomm, Project.Date as projdate 
    FROM Project
    WHERE Project.ID_employee = $idForProj";
    $result2 = mysqli_query($conn, $query2);
    ?>

    <html>
        <head>
            <title>Employee Interface</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="style2.css" rel="stylesheet">
    </head>
    <body>
    
        
        
    <div class="col" id="list">
    <h5>Your Table:</h5>
    
       <table class="table">
        <thead class="thead-dark">
          <tr>
            
            <th scope="col">Project</th>
            <th scope="col">Comments</th>
            <th scope="col">Date</th>
            
          </tr>
        </thead>
        <tbody>
        <? 
while ($row = mysqli_fetch_array ($result2) ){
?>
<tr>
<td>
    <? 
    echo $row ['projname']
    ?>
</td>

<td>
    <? 
    echo $row ['projcomm']
    ?>
</td>

<td>
    <? 
    echo $row ['projdate']
    ?>
</td>
</tr>
            <tr>
<?
}


?>
          </tr>
        </tbody>
      </table>
     
</div>
    
   
    <footer>
          <p>Contact us anytime if you can't manage to log in.</p>
           <p>Project Manager App &copy; 2020 </p>
        </footer>
    </body>
    
    </html>
