<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from demo.devitems.com/raymond-preview/raymond/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 16:45:00 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop || Raymond</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="img/favicon.png" />
        <!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- fancybox CSS -->
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- pe-icon-7-stroke css -->
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- style css -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style_range.css">
    </head>
    <body>
<header>
            <div class="header-area" id="sticker">
                <div class="container">
                    <div class="row">
                        <!-- LOGO AREA START -->
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/anchor_logo_dribbble.png" height="144px" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <!-- LOGO AREA END -->
                         <!-- MAIN MENU AREA START -->
                    
                        <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
                            <div class="mainmenu">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Shop</a>
                                            <div class="mega-menu">
                                                <div class="single-mega-menu">
                                                    <h3 class="menu-hedding">
                                                        <a href="#">MEN</a>
                                                    </h3>
                                                    <?php
                                                    $conn=mysqli_connect("localhost","root","","raymond");
                                                    $sql=mysqli_query($conn,"select * from subcategory where category='Men'");
                                                     while($row=mysqli_fetch_array($sql))
                                                    {
                                                   ?>
                                                     <a href="shop_men.php?update=<?php echo $row['id']?>"><?php echo $row['subcategory']?></a>
                                               <?php  }
                                                        ?>

                                                 
                                                   
                                                    
                                                </div>
                                                <div class="single-mega-menu">
                                                    <h3 class="menu-hedding">
                                                        <a href="shop.php">WOMEN</a>
                                                    </h3>
                                                       <?php
                                                    $conn=mysqli_connect("localhost","root","","raymond");
                                                    $sql=mysqli_query($conn,"select * from subcategory where category='Women'");
                                                     while($row=mysqli_fetch_array($sql))
                                                    {
                                                   ?>
                                                     <a href="shop_men.php?update=<?php echo $row['id']?>"><?php echo $row['subcategory']?></a>
                                               <?php  }
                                                        ?> 
                                                </div>
                                                <div class="single-mega-menu">
                                                    <h3 class="menu-hedding">
                                                        <a href="#">Special Collection</a>
                                                    </h3>
                                                        <?php
                                                    $conn=mysqli_connect("localhost","root","","raymond");
                                                    $sql=mysqli_query($conn,"select * from subcategory where category='Special Collection'");
                                                     while($row=mysqli_fetch_array($sql))
                                                    {
                                                   ?>
                                                     <a href="shop_men.php?update=<?php echo $row['id']?>"><?php echo $row['subcategory']?></a>
                                               <?php  }
                                                        ?>
                                                </div>
                                                <div class="single-mega-menu">
                                                    <div class="menu-img">
                                                        <img src="img/menu2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="blog-4-columns.php">Stories</a>
                                        </li>
                                        <li>
                                            <a href="about-us.php">About us</a>
                                        </li class="active">
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- MAIN MENU AREA END -->
                        <!-- HEADER RIGHT START -->
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="header-right">
                                <div class="search-box-area">
                                    <div class="header-menu-item-icon">
                                       <a href="#" class="icon-search">
                                            <i class="fa animated fa-search search-icon"></i>
                                        </a>
                                    </div>
                                     <div class="search-form">
                                        <form action="#" method="post">
                                            <input type="text" placeholder="Search here...">
                                            <a title="Close" class="close-icon" href="#">X</a>
                                        </form>
                                    </div>
                                </div>
                                <div class="user-menu-area">
                                    <div class="header-menu-item-icon">
                                        <a href="#" class="user-icon">
                                            <i class="fa animated fa-gear"></i>
                                        </a>
                                        <div class="user-menu">
                                            <h3>ACCOUNT</h3>
                                            <ul>

 <?php 
                                                // print_r($_SESSION);
  if(!isset($_SESSION['username'])):
  
  ?>

  <li>
  <a href="login.php"><i class="fa fa-fw fa-unlock-alt"></i>Login</a>
   </li>
  <?php 
    endif;      
 ?>
 <?php 
                                                // print_r($_SESSION);
  if(isset($_SESSION['username'])):
  
  ?>
                                                <li>
                                                    <a href="my-account.php"><i class="fa fa-fw fa-user"></i>My Account</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php"><i class="fa fa-fw fa-heart"></i>My Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="shopping-cart.php"><i class="fa fa-fw fa-shopping-cart"></i>My Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.php"><i class="fa fa-fw fa-usd"></i>Checkout</a>
                                                </li>
                                              
                                                     <li>
                                                         <a href="logout.php"><i class="fa fa-fw fa-user"></i>Logout</a>
                                                </li>
                                            
                                           <?php 
                                        endif;
                                           ?>

                    


                                            </ul>
                                            <!-- <h3>LANGUAGE</h3>
                                            <ul>
                                                <li><a href="#"><img src="img/icon/en.png" alt="">English</a></li>
                                                <li><a href="#"><img src="img/icon/fr.png" alt="">French</a></li>
                                                <li><a href="#"><img src="img/icon/ge.png" alt="">German </a></li>
                                                <li><a href="#"><img src="img/icon/sp.png" alt="">Spanish</a></li>
                                            </ul>
                                            <h3>CURRENCY</h3>
                                            <ul>
                                                <li><a href="#">$ - USD</a></li>
                                                <li><a href="#">€ - Euro</a></li>
                                                <li><a href="#">£ - GBP</a></li>
                                            </ul> -->

                                        </div>
                                    </div>
                                </div>
                                <div class="mini-cart-area">
                                    <div class="header-menu-item-icon">
                                        <a href="#" class="icon-cart">
                                            <i class="fa animated fa-shopping-cart"></i>
                                            <!-- <span class="cart-total"></span> -->
                                        </a>
                                        <div class="mini-cart"  style="height: 350px;

  overflow-y: scroll;">
                                           
                                              <?php 
                                              if(isset($_SESSION['username'])){
                                                
                                            
                                                     $id=$_SESSION['id'];
                                                    $conn=mysqli_connect("localhost","root","","raymond");
                                                    $sql=mysqli_query($conn,"select * from cart where user_id='$id'");
                                                    
                                                     $total=0;
                                                    while($row=mysqli_fetch_array($sql))
                                                    {          
                                                $a=$row['quantity'];
                                                $b=$row['price'];
                                                $total=$total+($a*$b); 
                                             
                                              
                                    echo'
                                    <ul>
                                                <li>
                                                   
                                                    <div class="pro-img">
                                                        <img src="../theme/kenny/uploads/'.$row['image'].'" 
                                                             alt="">
                                                    </div>
                                                    
                                                    
                                                    <div class="cart-poro-details">
                                                        <h2>
                                                            <a href="#">'.$row['pname'].'</a>
                                                        </h2>
                                                        <div class="star-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="quantity">
                                                            '.$row['quantity'].'x<span>'.$row['price'].'</span>
                                                        </div>
                                                    </div>
                                                </li>
                                               
                                            </ul>
                                          ';
                                        }
                                        ?>
                                          <p class="total">
                                                <strong>Total:</strong>
                                                <span class="total-price"><?php echo $total ?></span>
                                            </p>
                                            <?php } ?>
                                            <p class="buttons">
                                                <a href="shopping-cart.php">Go To Cart</a>
                                                <a href="checkout.php">Check Out</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- HEADER RIGHT END -->
                    </div>
                </div>
                <!-- mobile-menu-area start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                       <ul>
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Shop</a>
                                            <div class="mega-menu">
                                                <div class="single-mega-menu">
                                                    <h3 class="menu-hedding">
                                                        <a href="#">MEN</a>
                                                    </h3>
                                                    <?php
                                                    $conn=mysqli_connect("localhost","root","","raymond");
                                                    $sql=mysqli_query($conn,"select * from subcategory where category='Men'");
                                                     while($row=mysqli_fetch_array($sql))
                                                    {
                                                   ?>
                                                     <a href="shop_men.php?update=<?php echo $row['id']?>"><?php echo $row['subcategory']?></a>
                                               <?php  }
                                                        ?>

                                                 
                                                   
                                                    
                                                </div>
                                                <div class="single-mega-menu">
                                                    <h3 class="menu-hedding">
                                                        <a href="shop.php">WOMEN</a>
                                                    </h3>
                                                       <?php
                                                    $conn=mysqli_connect("localhost","root","","raymond");
                                                    $sql=mysqli_query($conn,"select * from subcategory where category='Women'");
                                                     while($row=mysqli_fetch_array($sql))
                                                    {
                                                   ?>
                                                     <a href="shop_women.php?update=<?php echo $row['id']?>"><?php echo $row['subcategory']?></a>
                                               <?php  }
                                                        ?> 
                                                </div>
                                                <div class="single-mega-menu">
                                                    <h3 class="menu-hedding">
                                                        <a href="#">Special Collection</a>
                                                    </h3>
                                                        <?php
                                                    $conn=mysqli_connect("localhost","root","","raymond");
                                                    $sql=mysqli_query($conn,"select * from subcategory where category='Special Collection'");
                                                     while($row=mysqli_fetch_array($sql))
                                                    {
                                                   ?>
                                                     <a href="shop_women.php?update=<?php echo $row['id']?>"><?php echo $row['subcategory']?></a>
                                               <?php  }
                                                        ?>
                                                </div>
                                                <div class="single-mega-menu">
                                                    <div class="menu-img">
                                                        <img src="img/menu2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="blog-4-column.php">Blogs</a>
                                        </li>
                                        <li>
                                            <a href="about-us.php">About us</a>
                                        </li class="active">
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                                    </nav>
                                </div>                  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile-menu-area end -->        
            </div> 
        </header>
