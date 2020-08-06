<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Thank You!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner_image" style="height: 620px;margin-bottom: 0px;">
            <div class="container">
                <div class="jumbotron" style="margin-top: 200px;background-color: rgba(0, 0, 0, 0.7);">
                    <?php
                    $id = $_SESSION['id'];
                    $success_query = "update users_products set status='confirmed' where user_id=$id";
                    $success_query_result = mysqli_query($con, $success_query) or die("Some error occurred.");
                    ?>
                    <h1>Your order is confirmed.</h1>
                    <p>Thank you for shopping with us. <a href="product.php">Click here</a> to purchase any other item.</p>
                </div>
            </div>   
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
