<?php
require 'common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Registration form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .top_margin{
                margin-top:20px;
            }
        </style>
    </head>
</head>
<body>
    <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">User Registration</div>
                    <div class="panel-body">
                        <form method="POST" action="login_submit.php">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include 'footer.php';
?>
</html>


