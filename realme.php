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
    <body>
        <?php
        include'header.php';
        ?>
          <div class="container">
            <div class="jumbotron">
                <center>  <h2>REALME</h2></center>
            
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/realme/3pro.jpg" alt="Realme 3 Pro">
                        <div class="caption">
                            <a href="realme3pro.php" style="text-decoration: none;">Realme 3 Pro</a>
                        </div>   
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/realme/c1_2019.jpg" alt="Realme C1 (2019)">
                        <div class="caption">
                            <a href="realme_c1.php" style="text-decoration: none;">Realme C1 (2019)</a>
                        </div>   
                    </div>
                 </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/realme/u1.jpg" alt="Realme U1">
                        <div class="caption">
                           <a href="realme_u1.php" style="text-decoration: none;">Realme U1</a>
                        </div>   
                    </div>
                 </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail"><img class="img-responsive" src="img/realme/c2.jpg" alt="Realme C2">
                        <div class="caption">
                              <a href="realme_c2.php" style="text-decoration: none;">Realme C2</a>
                        </div>   
                    </div>
                  </div>
                
            </div>
        </div>
            
       
        <br><br><br><br>  
        <?php
        include 'footer.php';
        ?>
    </body>
</html>