<?php
require 'common.php';
if (isset($_SESSION['email'])) 
    {   header('location: products.php'); } 
    ?>
 
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="css/style.css" rel="stylesheet" type="text/css"/>
      <meta name="viewport" content="width=device-width initial-scale=1">

        <title> Bootstrap</title>
    </head>
    <body>
        <?php
            include 'header.php';
       ?>
        
             <?php
            include 'footer.php';
            ?>
    </body>
</html>
