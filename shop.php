<!DOCTYPE html>
<html lang="en">
<head>
    <title>E Commerece Site</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" >
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div id="top">
    <div class="container">
        <div class="col-md-6 offer">
            <a href="#" class="btn btn-success btn-sm">
                Wellcome : Guest
            </a>
            <a href="#">
                Shopping Cart Total Price :$100,Total Items 2
            </a>
        </div>
        <div class="col-md-6">
            <ul class="menu">
                <li>
                    <a href="customer_regsiter.php">Register</a>
                </li>
                <li><a href="checkout.php">My Account</a>
                </li>
                <li><a href="cart.php">Go to Cart</a></li>
                <li><a href="checkout.php">Login</a></li>

            </ul>
        </div>
    </div>
</div>
<div class="navbar navbar-default" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand home">
                <img src="images/logo.png" alt="iphonecovers logo" class="hidden-xs">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">
                        Toggle Navigation
                    </span>
                <i class="fa fa-align-justify"></i>
            </button>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">
                        Toggle Search
                    </span>
                <i class="fa fa-search">
                </i>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navigation">
            <div class="padding-nav">
                <ul class="nav navbar-nav navbar-left">
                    <li ><a href="index.php">Home</a></li>
                    <li class="active"><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact us</a></li>

                </ul>
            </div>
            <a href="cart.php" class="btn btn-primary navbar-btn right">
                <i class="fa fa-shopping-cart"><span>4 itmes in Cart</span></i>

            </a>
            <div class="navbar-collapse collapse right">
                <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search ">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="collapse clearfix"id="search">
                <form action="results.php" method="get" class="navbar-form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                        <span class="input-group-btn">
                            <button type="submit" value="Search" name="search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                                </span>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="idnex.php">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>

        <div class="col-md-3">
            <?php include "includes/sidebar.php" ?>
        </div>
    </div>
</div>













<?php
include("includes/footer.php");
?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>