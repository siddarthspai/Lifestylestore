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
        <title>Settings</title>
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
        <div id="banner_image" style="margin-bottom: 0px;">
            <div class="inner-banner-image">
                <center>
                    <div class="row row_style">
                        <div class="col-xs-12">
                            <div class="panel panel-primary" style="margin-bottom: 61px;">
                                <div class="panel-heading">
                                    <h4>Change password</h4>
                                </div>
                                <div class="panel-body">
                                    <form action="includes/setting_script.php" method="POST">
                                        <div class="form-group">
                                            <label for="password" style="color:#000000;">Old Password</label>
                                            <input type="password" class="form-control" name="old-password" required = "true">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" style="color:#000000;">New Password</label>
                                            <input type="password" class="form-control" name="password" required = "true">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" style="color:#000000;">Re-type New Password</label>
                                            <input type="password" class="form-control" name="passwordl" required = "true">
                                        </div>                                        
                                        <button type="submit" class="btn btn-primary btn-block">Change</button>
                                    </form> 
                                </div>
                                <div style="color:#FF0000;">
                                    <?php echo $error = filter_input(INPUT_GET, 'error'); ?>
                                </div>
                                <div class="panel-footer">
                                    <h4 style="color:#000000;">Don't have an account? <a href="signup.php" class="btn btn-primary btn-lg active">Register</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>      
    </body>   
</html> 