<?php
require 'common.php';
$usercart="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$user_registration_submit = mysqli_query($con, $usercart) or die(mysqli_error($con));
header('location:products.php');?>
