<?php
session_start();
?>
<html>
    <head>
          <title>WhatsYourMobile</title>
          <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  >
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css2.css" rel="stylesheet" type="text/css">
    </head>
    <body style="background-color:black;">
         
          <?php
          include 'header.php';
          ?>
             <div class="container">
            <div class="jumbotron">
                <center>  <h2>Find the best for you. </h2></center>
            
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/mobile/asus.jpg" alt="ASUS">
                        <div class="caption">
                            <a href="asus.php" style="text-decoration: none;"><h4>ASUS</h4></a>
                        </div>   
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/mobile/realme.jpg" alt="REALME">
                        <div class="caption">
                            <a href="realme.php" style="text-decoration: none;"><h4>REALME</h4></a>
                        </div>   
                    </div>
                 </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/mobile/redmi.png" alt="REDMI">
                        <div class="caption">
                           <a href="redmi.php" style="text-decoration: none;"><h4>REDMI</h4></a>
                        </div>   
                    </div>
                 </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail"><img class="img-responsive" src="img/mobile/samsung.png" alt="SAMSUNG">
                          <div class="caption"><br><br>
                            <a style="text-decoration: none;" href="samsung.php"><h4>SAMSUNG</h4></a>
                        </div>   
                    </div>
                  </div>
                
            </div>
            
                
                
             
                 </div>
       
        <br><br><br><br>    <?php
           include 'footer.php';
        ?>
    </body>
</html>