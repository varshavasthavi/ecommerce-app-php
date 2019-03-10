<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width initial-scale=1">

        <title>Products Bootstrap</title>
    </head>
    <body>
        <?php
        include 'header.php';
        include 'check_if_added.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h3>Welcome to our Lifestyle Store!</h3>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place
                </p></div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <img src="https://n3.sdlcdn.com/imgs/e/r/w/230X258_sharpened/Nikon-D5600-24-2-MP-SDL631491143-1-36dca.webp" class="img-thumbnail">

                    <div class="caption">CANON DSLR<br>Rs.45,000</div>
                     <?php if (!isset($_SESSION['email'])) {                                  
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
                    } else {
                        if (check_if_added_to_cart(1)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                             <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                      }
            } ?> 
                </div>

                <div class="col-md-3 col-sm-6">
                    <img src="https://n1.sdlcdn.com/imgs/b/y/1/230X258_sharpened/Canon-EOS-1300D-18-55-SDL423662692-1-3c1fa.webp" class="img-thumbnail">
                    </img>
                    <div class="caption">Canon-EOS-1300D<br>Rs.36,000</div>
                    <?php if (!isset($_SESSION['email'])) {                                  
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
                    } else {
                        if (check_if_added_to_cart(2)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                             <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                      }
            } ?> 

                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="https://n3.sdlcdn.com/imgs/a/y/c/230X258_sharpened/Sony-ILCE-6000Y-DSLR-Camera-SDL818136971-1-11fc4.webp" class="img-thumbnail">
                    </img>
                    <div class="caption">Sony-ILCE DSLR<br>Rs.57,000</div>
                    <?php if (!isset($_SESSION['email'])) { ?>                                 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                            ?>  <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php }
            } ?> 

                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="https://n1.sdlcdn.com/imgs/d/c/n/230X258_sharpened/Nikon-D3400-24-2-MP-SDL943464195-1-3a42e.webp" class="img-thumbnail">
                    </img>
                    <div class="caption">Nikon D3400<br>Rs.40,000</div>
                    <?php if (!isset($_SESSION['email'])) { ?>                                 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                            ?>  <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php }
            } ?> 

                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <img src="https://n4.sdlcdn.com/imgs/a/k/n/230X258_sharpened/Casio-G-Shock-Black-Gold-SDL289651221-1-94543.webp" class="img-thumbnail">
                    </img>
                    <div class="caption">Casio-G<br>Rs.3,000</div>
                    <?php if (!isset($_SESSION['email'])) { ?>                                 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                            ?>  <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php }
            } ?> 

                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="https://n2.sdlcdn.com/imgs/e/v/o/230X258_sharpened/SDL044502225_1-6ee47.webp" class="img-thumbnail">
                    </img>
                    <div class="caption">Timex-black<br>Rs.400</div>
                    <?php if (!isset($_SESSION['email'])) { ?>                                 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                            ?>  <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php }
            } ?> 

                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="https://n2.sdlcdn.com/imgs/c/n/o/230X258_sharpened/Laurels-Matrex-Blue-Dail-Men-SDL764118420-1-da9ad.webp" class="img-thumbnail">
                    </img>
                    <div class="caption">Laurel's matrix<br>Rs.4,000</div>
                    <?php if (!isset($_SESSION['email'])) { ?>                                 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php
                    } else {
                        if (check_if_added_to_cart(7)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                            ?>  <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php }
            } ?> 

                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="https://n3.sdlcdn.com/imgs/h/b/c/230X258_sharpened/Fastrack_3039SM02_Men_s_Watch_SDL485943361_1_bc0ba-d2e59.webp" class="img-thumbnail">
                    </img>
                    <div class="caption">Fastrack men's<br>Rs.5,000</div>
                    <?php if (!isset($_SESSION['email'])) { ?>                                 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                            ?>  <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php }
            } ?> 
                </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <img src="https://assets.myntassets.com/dpr_1.5/h_240,q_90,w_180/v1/assets/images/1271548/2018/4/28/11524891516532-INVICTUS-White-Slim-Fit-Formal-Contrast-Collar-Shirt-7511524891516308-1_mini.jpg" class="img-thumbnail">
                        </img>
                        <div class="caption">Arrow formals<br>Rs.1,000</div>
                        <?php if (!isset($_SESSION['email'])) { ?>                                 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php
                        } else {
                            if (check_if_added_to_cart(9)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>  <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php }
                } ?> 

                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="https://assets.myntassets.com/dpr_1.5/h_240,q_90,w_180/v1/assets/images/2162260/2018/4/26/11524741547500-INVICTUS-Men-Navy-Blue-Slim-Fit-Self-Design-Formal-Shirt-3691524741547271-1_mini.jpg" class="img-thumbnail">
                        </img>
                        <div class="caption">Arrow new york men's formal<br>Rs.2,000</div>
                        <?php if (!isset($_SESSION['email'])) { ?>                                 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>  <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php }
                } ?> 

                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="https://assets.myntassets.com/dpr_1.5/h_240,q_90,w_180/v1/assets/images/1695178/2017/1/24/11485259417846-INVICTUS-Men-Green-Slim-Fit-Solid-Formal-Shirt-951485259417659-1_mini.jpg" class="img-thumbnail">
                        </img>
                        <div class="caption">Raymond formal<br>Rs.1,100</div>
                        <?php if (!isset($_SESSION['email'])) { ?>                                 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php
                        } else {
                            if (check_if_added_to_cart(11)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>  <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php }
                } ?> 

                    </div>
                    <div class="col-md-3 col-sm-6">
                        <img src="https://assets.myntassets.com/dpr_1.5/h_240,q_90,w_180/v1/assets/images/1271545/2018/3/15/11521104426372-INVICTUS-Yellow-Linen-Slim-Fit-Formal-Shirt-9791521104426203-1_mini.jpg" class="img-thumbnail">
                        </img>
                        <div class="caption">Raymond cotton formals<br>Rs.950</div>
                        <?php if (!isset($_SESSION['email'])) { ?>                                 
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php
                        } else {
                            if (check_if_added_to_cart(12)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } else {
                                ?>  <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php }
                } ?> 

                        <div>
                        </div>
                    </div>
                    </body>
                    <footer style="margin-top: 800px;padding-bottom: 10px;background-color: #d3d3d3; text-color: #101010;" >
                        <center>Copyright © Lifestyle Store. All Rights ReservedƉ and ƈContact Us: +91 90000 00000
                        </center>
                    </footer>
                    </html>


