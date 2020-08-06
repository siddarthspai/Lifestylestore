<?php
require("includes/common.php");
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
        <title>My Cart</title>
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
        <br><br><br>
        <div class="container">
            <table class="table table-bordered table-striped">
                <?php
                $sum = 0;
                $user_id = $_SESSION['id'];
                $query = "SELECT products.price AS Price, products.pid, products.name AS Name FROM users_products JOIN products ON users_products.product_id = products.pid WHERE users_products.user_id='$user_id' and status='added to cart'";
                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                if (mysqli_num_rows($result) >= 1) {
                    ?>
                    <thead>
                        <tr>
                            <th>Item Name</th><th>Price</th><th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            $sum += $row["Price"];
                            echo "<tr><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='includes/cart_remove.php?id={$row['pid']}' class='remove_item_link'> Remove</a></td></tr>";
                        }
                        echo "<tr><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td></tr>";
                        ?>
                    </tbody>
                <?php
                } else {
                    echo "<center class='jumbotron'style='margin-top: 200px;background-color: rgba(0, 0, 0, 0.7);'><h2 style='color:#ff0000;'>Add items to the cart first!</h1><p>Flat 10% OFF on premium brands</p><a href='product.php' class='btn btn-danger btn-lg active'>Shop Now</a></center>";
                }
                ?>
            </table>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
        <?php
        include("includes/footer.php");
        ?>
    </body>
</html>
