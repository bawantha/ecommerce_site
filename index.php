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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
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
<!--    Create Image Slider-->
    <div id="slider" class="container">
        <div class="col-md-12">
            <div  id="eComCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#eComCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#eComCarousel" data-slide-to="1"> </li>
                    <li data-target="#eComCarousel" data-slide-to="2"> </li>
                    <li data-target="#eComCarousel" data-slide-to="3"> </li>

                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="admin_area/slides_images/1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="admin_area/slides_images/4.png" alt="">
                    </div>
                </div>
                <a href="#eComCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#eComCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>