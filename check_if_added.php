<?php

function check_if_added_to_cart($item_id) {
    require 'common.php';
    $select = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
    $select_result = mysqli_query($con, $select) or die(mysqli_error($con));
    $total = mysqli_num_rows($select_result);
    if ($total > 0) {
        return 1;
    } else {
        return 0;
    }
}
