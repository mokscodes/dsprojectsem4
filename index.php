<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to the Farmers Store!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
        body {
            background-image: url('img/bg.jpg');
            background-size: cover;
            background-position: center;
        }
        p {
            color: #3e424b; 
        }
        h1, h3 {
            color: #D3D3D3; 
        }
        

    </style>
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell farmer essentials and equipement.</h1>
                       <h3>From fertilizers to tractors: we sell everything.</h3>
                       <a href="farmerdash.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="farmerdash.php">
                                <img src="img/fert.jpg" alt="Fertilizers">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Fertilizers</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="farmerdash.php">
                               <img src="img/seed.jpg" alt="seed">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Produce/Seeds</p>
                                    <p>High Quality.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="farmerdash.php">
                               <img src="img/tractor.jpg" alt="tractor">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Equipment</p>
                                   <p>Tough and Durable.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
               <?php
            require 'footer.php';
            ?>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>