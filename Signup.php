<?php
    require 'common.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: mobile.php');
    }
?>
<html>
    <head>
          <title>WhatsYourMobile</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  >
    <link href="form.css" rel="stylesheet" type="text/css">
    </head>
    <body>
         <div class=" header navbar navbar-inverse navbar-fixed-top">
           <?php
          include 'header.php';
          ?>
         </div>
         <br><br><br>

           
               <h2>SIGN UP</h2>
               <form method="POST" action="user_registration_script.php">
       <div class="imgcontainer">
    <img src="img/avatar.png" alt="Avatar" class="avatar">
         </div>

          <div class="container">
              <label for="uname"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="uname" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>
    
    <label for="cno"><b>Contact No.</b></label>
    <input type="text" placeholder="Enter Conatct No." name="cno" required>

         <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
   
        
    <button type="submit" name="signup" value="signup">Sign Up</button>
        <label>
             <input type="checkbox" unchecked="unchecked" name="remember"> Remember me
        </label>
             </div>

         
</form>
                        <div class="panel-footer">Already have an account? <a href="login.php">Login</a></div>
                        <br><br><br><br> <br>         <?php
           include 'footer.php';
        ?>
    </body>
</html>
