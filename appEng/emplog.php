<?php
    session_start();

    if(isset($_SESSION['User']))
    {
     echo'';
    }
    else
    {
        header("location:empindex.php");
    }
  ?>
    <html>
        <head>
            <title>Employee Interface</title>
    
   
            <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
      <div class="container">
        <div id="branding">
          <h1 id="ph1"><span id="highlight">Project</span> Manager App</h1>
        </div>
      </div>
    </header>
       
     
                  <div id="Employees-List" >
            <div class="container" > 
                <div class="row" >
                 
                            
                            
                            
    
                           
                                                    
                             <form class="searchField" action="findProject.php" method="post">
                                <div class="container">
                                    <div class="row" >
                                    <label for="wellcome"><b><h3 id="well">
                                        <?php
   
                                echo ' Welcome back, ' . $_SESSION['User'].'<br/>'; ?>
                                        <br> Please use your id to check the projects you have been assigned to: </h3></b></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="find" placeholder="Insert your ID">
                                            <button class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
                                        </div>
                                    </div>
                                    </div>
</form>
                            
                        
                 </div>
                 
              
           
        
    
    
           
        </div>
        </div>
        
    
        
    
           
            <script src="form-validation.js"></script>
         <footer>
          <p>Contact us anytime if you can't manage to log in.</p>
           <p>Project Manager App &copy; 2020 </p>
        </footer>
    </body>
    
    </html>
