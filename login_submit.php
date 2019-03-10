<?php

require 'common.php';

$email = mysqli_real_escape_string($con, $_POST['email']);
$password= md5($password);

$password = mysqli_real_escape_string($con, $_POST['password']);
$select_query = "SELECT  email, password FROM users where email='$email' AND password='$password'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
if ($total_rows_fetched == 0) {
    echo 'no such user exists';
    header('location: index.php');
} else{
    $row= mysqli_fetch_array($select_query_result);
   
   $_SESSION['email'] = $email;
   header('location: products.php');
   
}

