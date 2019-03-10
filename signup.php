<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width initial-scale=1">

        <title>signup Bootstrap</title>
        <style>
            .row_style{
                text-align: center;
                margin-top: 50px;
            }</style>
    </head>
    <body>
        <?php
        require 'common.php';
        include 'header.php';
        if (isset($_SESSION['email'])) {
    header('location: products.php');
}
        ?>

        <div class="container">
            <div class="row row_style">
                <div class="col-xs-12">
                    <h4><b>SIGNUP</b></h4>
                    <form method="POST" action=" signup_script.php" style="padding: 0px 400px 0px 400px;">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="name"  placeholder="Name" >
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                        </div>

                        <div class="form-group">
                            <input type="text"  class="form-control" name="contact"  placeholder="Contact" >
                        </div>  <div class="form-group">
                            <input type="text"  class="form-control" name="city"  placeholder="City" >
                        </div>  <div class="form-group">
                            <input type="text"  class="form-control" name="address"  placeholder="Address" >
                        </div>
                    </form>
                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
                </div>
            </div>
        </div>
        <?Php
        include 'footer.php';
        ?>
    </body>
</html>
