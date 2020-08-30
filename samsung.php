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
                <center>  <h2>SAMSUNG</h2></center>
            
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/samsung/a80.jpg" alt="Samsung Galaxy A80">
                        <div class="caption">
                            <a href="samsung_a80.php" style="text-decoration: none;">Samsung Galaxy A80</a>
                        </div>   
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail"><img class="img-responsive" src="img/samsung/m30.jpg" alt="Samsung Galaxy M30">
                        <div class="caption">
                            <a href="samsung_m30.php" style="text-decoration: none;">Samsung Galaxy M30</a>
                        </div>   
                    </div>
                 </div>
                
            </div></div>
        <br><br><br><br> 
        <?php
        include 'footer.php';
        ?>
    </body>
</html>