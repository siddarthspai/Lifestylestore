<?php
require_once 'common.php';
function check_if_added_to_cart($con,$product_id,$user_id){
    $added_to_cart_query="select * from users_products where product_id='$product_id' and user_id='$user_id' and status='added to cart'";
    $added_to_cart_result= mysqli_query($con,$added_to_cart_query)or die(mysqli_errno($con));
    if(mysqli_num_rows($added_to_cart_result)>=1){
        return 1;
    }
    else{
        return 0;
    }
}
?>