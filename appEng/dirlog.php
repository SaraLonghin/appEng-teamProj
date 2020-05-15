<?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo '<br/>';
    }
    else
    {
        header("location:dirindex.php");
    }
    $host="localhost";
    $user="root";
    $pwd="";
    $db="appproject";
    
    
    $conn=mysqli_connect($host,$user,$pwd,$db) or die ("unable to connect");
    
    $query = 
      "SELECT   employee.id as empid, employee.name as dirname,  employee.surname as dirsurn, employee.dob as dirdob, employee.contact as dircont, employee.department as dirdep 
    FROM employee";
    
    $result = mysqli_query($conn, $query);
    
    $query2= "SELECT  Project.*,  Project.ID_employee as projid, Project.Project_name as projname, Project.Comments as projcomm, Project.Date as projdate 
    FROM Project JOIN employee ON Project.ID_employee = employee.id";
    
    $result2 = mysqli_query($conn, $query2);
    
    
    
    ?>

<html>
    <head>
        <title>Director Interface</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="style2.css" rel="stylesheet">
</head>
<body>
   <h5> <?php echo ' &nbsp; Welcome back, ' . $_SESSION['User'] ?></h5>
 

            <div class="tab">
                    <button class="tablinks" id="empbutton" onclick="openTab(event, 'Employees-List')">Employees-List</button>
                <button class="tablinks" onclick="openTab(event, 'Projects')">Projects</button>
                
              </div>
              <div id="Employees-List" id= "tabEmployee" style="display:block"  class="tabcontent">
        <div class="container" > 
            <div class="row" >
             
               
                
            <form action="add.php" method="post" >
                    <div class="col" id="inp-fields">
                         <span><span id="add">Assign</span>,<span id="rem"> Remove</span> or <span id="load">Load</span>  Employees </span>
                     <input type="text" id="firstName" class="form-control" placeholder="ID*" name="idEmployee" required>
                     <input type="text" id="Name" class="form-control" placeholder="Name*" name="employee" required>
                     <input type="text" id="firstName" class="form-control" placeholder="Surname*" name="surEmployee" required>
                     <input class="form-control it-date-datepicker" id="date1" type="text" placeholder="Date of Birth dd/mm/yyyy*" name ="dateEmployee" required>
                     <input type="text" id="firstName" class="form-control" placeholder="Contact*" name="contactEmployee" required>
                     <input type="text" id="firstName" class="form-control" placeholder="Department*" name="departmentEmployee" required>
                     <input type="text" id="firstName" class="form-control" placeholder="Pass Key*" name="passass" required>
                    
                    <div class="row justify-content-center">
                        <input type="submit" class="btn btn-success"  name="add" value="Add"  >
                        
                        </div>
                        </form>

                        <form action="remove.php" method="post">
                        <div class="row justify-content-center">
                        <input type="text" id="firstName" class="form-control" placeholder="ID*" name="idRemove" required>
                        <input type="submit" class="btn btn-danger"  value="Remove" >
                        </div>
                    </form>
                    
                    
                        
                       
                        

                    
                    <div class="row justify-content-center">
                        <input type="reset" class="btn btn-light" value="Clear fields" >
                              </div>
                           
                            </div>
             
             
          
       
    


        <div class="col" id="list">
            <p>Your Table:</p>
               <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Department</th>
                  </tr>
                </thead>
                <tbody>
                <? 
while ($row = mysqli_fetch_array ($result) ){
    ?>
    <tr>
        <td>
            <? 
            echo $row ['empid']
            ?>
        </td>

        <td>
            <? 
            echo $row ['dirname']
            ?>
        </td>
        <td>
            <? 
            echo $row ['dirsurn']
            ?>
        </td>
        <td>
            <? 
            echo $row ['dirdob']
            ?>
        </td>

        <td>
            <? 
            echo $row ['dircont']
            ?>
        </td>


        <td>
            <? 
            echo $row ['dirdep']
            ?>
        </td>
    </tr>
<?
}

mysqli_close($conn);
?>
</tbody>
               
              </table>
             
        </div>
    </div>
    </div>
</div>


<div id="Projects" id ="tabproj"  style="display:none" class="tabcontent">
    <div class="container" > 
        <div class="row " >
         
            
        <form action="addProj.php" method="post" >
                    <div class="col" id="inp-fields">
                    <span><span id="add">Assign</span>,<span id="rem"> Remove</span> or <span id="load">Load</span>  Projects </span>
                 <input type="text" id="" class="form-control" placeholder="ID Employee*" name="idForProj" required>
                 <input type="text" id="" class="form-control" placeholder="Project*" name="projName" required>
                 <input class="form-control it-date-datepicker" id="date1" type="text" placeholder="Date dd/mm/yyyy*" name="dateProj" required>
                 <input type="textarea" id="comments" class="form-control" placeholder="Comments" name="projComm" required>
            <div>
                    <div class="row justify-content-center">
                   
                        <input type="submit" class="btn btn-success"   value="Assign"  >
                        
                        </form>
                        </div>

                        <form action="removeProj.php" method="post">
                        <div class="row justify-content-center">
        
                        <input type="text" id="firstName" class="form-control" placeholder="Please insert the Employee ID" name="removeE" required>
                             <input type="text" class="form-control" placeholder="Please insert the Project name" name="removeP" required>
                        <input type="submit" class="btn btn-danger"  value="Remove" >
                        </div>
                        
                    </form>
                    
                
                    </div>
                    <div class="row justify-content-center">
                        <input type="reset" class="btn btn-light" value="Clear fields" >
                              </div>
                           
                            </div>
         
            

            

    <div class="col" id="list">
        <p>Projects:</p>
           <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID Employee</th>
                <th scope="col">Project assigned</th>
                <th scope="col">Date</th>
                <th scope="col">Comments</th>
              </tr>
            </thead>
            <tbody>
            <? 
while ($row = mysqli_fetch_array ($result2) ){
    ?>
    <tr>
        <td>
            <? 
            echo $row ['projid']
            ?>
        </td>

        <td>
            <? 
            echo $row ['projname']
            ?>
        </td>

        <td>
            <? 
            echo $row ['projdate']
            ?>
        </td>

        <td>
            <? 
            echo $row ['projcomm']
            ?>
        </td>
    </tr>
<?
}


?>
            </tbody>
            
          </table>
         
    </div>
</div>
</div>
</div>
   

        <script>
            function openTab(evt, tabName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(tabName).style.display = "block";
              evt.currentTarget.className += " active";
            }
            </script>
        <script src="form-validation.js"></script>
     <footer>
      <p>Contact us anytime if you can't manage to log in.</p>
       <p>Project Manager App &copy; 2020 </p>
    </footer>
</body>

</html>
