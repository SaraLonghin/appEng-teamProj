
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Login Form in PHP With Session</title>
</head>
<body style="background:#CCC;">
<header>
      <div class="container">
        <div id="branding">
          <h1 id="ph1"><span id="highlight">Project</span> Manager App</h1>
        </div>
      </div>
    </header>
    <section id="showcase">
      <div class="container">
         <form action="empprocess.php" method="post">
  <div class="imgcontainer">
    <img src="iconlog.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
  
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="UName" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>
        
    <button class="btn btn-success mt-3" name="Login">Login</button>
  </div>

  <div class="container">
  </div>
</form>
      </div>
    </section>
 <footer>
      <p>Contact us anytime if you can't manage to log in.</p>
       <p>Project Manager App &copy; 2020 </p>
    </footer>
</body>
</html>