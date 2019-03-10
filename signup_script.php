<?php

require 'common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
    header('location: index.php?email_error=enter correct email');
}
$password = $_POST['password'];
$select_query = "SELECT email, password FROM users where email='$email' AND password='$password'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
if ($total_rows_fetched > 0) {
    echo "user already exists";
    header('location: index.php');
} else {
    $user_registration_query = "insert into users(email, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['id'] = mysqli_insert_id($con);
    header('location: products.php');
}
