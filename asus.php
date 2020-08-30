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
                <center>  <h2>ASUS</h2></center>
            
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/asus/asus_zen_live_l2.jpg" alt="Asus ZenFone Live L2">
                        <div class="caption">
                            <a href="livel2.php" style="text-decoration: none;">Asus ZenFone Live (L2)</a>
                        </div>   
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/asus/maxm1.jpg" alt="Asus Zenfone Max (M1)">
                        <div class="caption">
                            <a href="max_m1.php" style="text-decoration: none;">Asus Zenfone Max (M1)</a>
                        </div>   
                    </div>
                 </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/asus/maxplusm2.jpg" alt="Asus Zenfone Max Plus (M2)">
                        <div class="caption">
                           <a href="max_plus_m2.php" style="text-decoration: none;">Asus Zenfone Max Plus (M2)</a>
                        </div>   
                    </div>
                 </div>
                  <div class="col-md-3 col-sm-6">
                      <div class="thumbnail"><img class="img-responsive" src="img/asus/maxpro.jpg" alt="Asus Zenfone Max Pro (M2) ">
                        <div class="caption">
                              <a href="max_pro_m2.php" style="text-decoration: none;">Asus Zenfone Max Pro (M2) </a>
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