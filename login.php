<?php
    require 'common.php';
    session_start();
?>
<html>
    <head>
      <title>WhatsYourMobile</title>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  >
     <link href="form.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
         <div class="header navbar navbar-inverse navbar-fixed-top">
         <?php
          include 'header.php';
          ?>
          </div>
        <br><br><br>
             <h2>LOGIN</h2>
             <form action="login_submit.php" method="POST">
                
                 <div class="imgcontainer">
                    <img src="img/avatar.png" alt="Avatar" class="avatar">
                 </div>

                <div class="container">
                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password(min. 6 characters)" pattern=".{6,}" name="pass" required>

                  <button type="submit" name="login" value="login">Login</button>
                  <label>
                    <input type="checkbox" unchecked="unchecked" name="remember"> Remember me
                  </label>
                </div>

              
            </form>
                        <div class="panel-footer">Don't have an account? <a href="Signup.php">Register</a></div>
                        <br><br><br><br><br>          <?php
           include 'footer.php';
        ?>
    </body>
</html>
