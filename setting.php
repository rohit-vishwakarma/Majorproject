<?php
    session_start();
    require 'common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>WhatsYourMobile</title>
        
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  >
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css2.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br><br>
            <div class="container">
                
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1>Change Password</h1>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Change">
                            </div>
                        </form>
                    </div>
                </div>
                </div>
           
        </div>
        <?php
        include'footer.php';
        ?>
    </body>
</html>
