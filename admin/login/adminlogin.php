<?php
session_start();
include_once "../models/admin.php";
include_once "../config.php";
include_once "../models/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Space Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- css files -->

    <!-- Online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- //Online-fonts -->

</head>

<body>
    <!-- main -->
    <div class="main">
        <div class="main-w3l">
            <h1 class="logo-w3">Login Admin</h1>
            <div class="w3layouts-main">
                <form action="login.php" method="post">
                    <input type="text" placeholder="Username" value="" name="username" required />
                    <input type="password" placeholder="Password" value="" name="password" required />
                    <div class="remember">
                        <span class="checkbox1">
                            <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
                        </span>
                        <div class="forgot">
                            <h6><a href="register.php">Register me</a></h6>
                        </div>
                        <div class="clear"> </div>
                    </div>

                    <input type="submit" value="Login">
                </form>
                <!-- <h6><a href="#">Lost Your Password?</a></h6> -->
            </div>
            <!-- //main -->

            <!--footer-->
            <!--//footer-->
        </div>
    </div>

</body>

</html>