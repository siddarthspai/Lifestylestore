<?php
require("common.php");
$product_id = filter_input(INPUT_GET,'id'); 
$user_id = $_SESSION['id'];
$query = "DELETE FROM users_products WHERE product_id='$product_id' AND user_id='$user_id' ";
$res = mysqli_query($con, $query) or die($mysqli_error($con));
header("location:../cart.php");
?>