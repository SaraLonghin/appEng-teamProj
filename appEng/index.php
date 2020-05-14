<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title> Project Manager App </title>
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
    <section id="showcase">
      <div class="container">
         <form action="mainpro.php" method="post">
  <div class="imgcontainer">
    <img src="iconlog.png" alt="Avatar" class="avatar">
  </div>

  <label for="uname"><b>Please press the following button if you're a director: </b></label>
    <button class="btn btn-success mt-3" name="Director">Director Login Page</button>
             <label for="uname"><b>Otherwise, if you're an employee, press the button below:</b></label>
    <button class="btn btn-success mt-3" name="Employee">Employee Login Page</button>
  

</form>
      </div>
    </section>
    <footer>
      <p>Contact us anytime if you can't manage to log in.</p>
       <p>Project Manager App &copy; 2020 </p>
    </footer>
  </body>
</html>
