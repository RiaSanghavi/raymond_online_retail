
<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from demo.devitems.com/raymond-preview/raymond/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 16:39:35 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login Or Register || Raymond</title>
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
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

      <?php include('header.php') ?>
        <!-- PAGE-HEADER-AREA-START -->
        <div class="page-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title">
                            <h2>Login Or Register</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE-HEADER-AREA-END -->
        <!-- BREADCRUMB-AREA-START -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="#">Home</a> | </li>
                                <li><span>Login Or Register</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB-AREA-END -->
        <!-- LOGIN-REGISTER-AREA-START -->
        <div class="login-register-area">
            <div class="container">
				<div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="login-form-area">
                           <h5 class="form-title">Login</h5>
                           <p class="sub-form-title">Hello, Welcome your to account</p>
                            <?php
                         
                                $conn=mysqli_connect("localhost","root","","raymond");
                                if(isset($_POST['submit']))
                                {
                                    $email=$_POST['email'];
                                    $pass=$_POST['pass'];

                                     $verify_email="select * from user where user_id='$email'";
                                       $result=mysqli_query($conn,$verify_email);
                                     $verify_email_pass=mysqli_query($conn,"select * from user where user_id='$email' and password='$pass'");
                                    
                                    $row=mysqli_fetch_array($result);
                                    // echo $row;
                                    // die();

                                    
                                    if(mysqli_num_rows($result)<1)
                                    {
                                        echo"<script>alert('email is not registered')</script>";
                                    }
                                    elseif(mysqli_num_rows($verify_email_pass)<1)
                                    {
                                        echo"<script>alert('password is wrong')</script>";
                                    }
                                    else
                                    {
                                        $sql=mysqli_query($conn,"select * from user where user_id='$email' and password='$pass'");
                                        if($sql)
                                        { 
                                            $name1=$row['name'];

                                            $_SESSION['id']=$row['id'];
                                            $_SESSION['username']=$name1;
                                           
                                            echo" <script>alert('Hi $name1'),
                                             window.location.href='index.php'</script>";
                                            

                                    }
                                }

                                }
                                ?>
                            <form method="post" action="#">
                                <p class="login-username">
                                    <label>Email Address</label>
                                    <input type="text" name="email">
                                </p>
                                <p class="login-password">
                                    <label>Password</label>
                                    <input type="password" name="pass">
                                </p>

                                <a href="#" class="forgot-password">Forgot Your password?</a>
                                <p class="login-remember">
                                    <label>
                                        <input type="checkbox" value="forever"> Remember me!
                                    </label>
                                </p>
                                <p class="login-submit">
                                    <input type="submit" value="LogIn" name="submit" class="button-primary">
                                </p>
                                
 <?php
$conn=mysqli_connect("localhost","root","","raymond");
if(isset($_POST['register'])){
    $user_id=$_POST['user_id'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    // extract($_POST);
    // print_r($_POST);
    // die();

// print_r($_POST);
// die();    


    $sql=mysqli_query($conn,"insert into user values ('','$user_id','$password','$name','$contact')");
    if ($sql) {
 
  echo "<script>alert('success')</script>";
}
else{
  echo"<script>alert('error')</script>";
}
  }
  ?>
                            </form>
                        </div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="registration-form">
							<h5 class="form-title">Create a new account</h5>
							<p class="sub-form-title">Create your own Unicase account</p>
							<form method="post" action="#">
                                <p>
                                    <label>Name</label>
                                    <input type="text" name="name" required>
                                </p>
                                 <p>
                                    <label>Email Address</label>
                                    <input type="email" name="user_id" required>
                                </p>
                                 <p>
                                    <label>Contact</label>
                                    <input type="text" name="contact" required>
                                </p>
                                 <p>
                                    <label>Password</label>
                                    <input type="password" name="password" required>
                                </p>
                                <p class="submit">
                                    <input type="submit" name="register" value="SignUp">
                                </p>
                            </form>
                            <div class="registration-info">
                                <h5>SignUp today and you'll be able to:</h5>
                                <ul>
                                    <li>Speed your way through the checkout.</li>
                                    <li>Track your orders easily.</li>
                                    <li>Keep a record of all your purchases.</li>
                                </ul>
                            </div>
						</div>
					</div>
				</div> 
			</div>
        </div>
        <!-- LOGIN-REGISTER-AREA-END -->        
        <!-- FOOTER TOP AREA START -->
        <div class="footer-top-area">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-socials">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm"></div>
                    <div class="col-md-3 col-sm-4">
                        <div class="news-letter-button">
                            <a data-target="#newslatterModal" data-toggle="modal" href="#">JOIN OUR NEWSLETTER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER TOP AREA END -->
        <!-- FOOTER MIDDLE AREA START -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="contact-info">
                            <h3 class="footer-title">CONTACT US</h3>
                            <div class="address-area">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-map-marker"></i>
                                        <span>Raymond London Oxford Street 02 United Kingdom.</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-envelope"></i>
                                        <span>admin@bootexperts.com admin@bootexperts.com</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-phone"></i>
                                        <span>+880 1973833508 <br>+880 1916401124</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h3 class="footer-title">QUICK LINK</h3>
                            <ul>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h3 class="footer-title">POLICIES</h3>
                            <ul>
                                <li><a href="#">New collection</a></li>
                                <li><a href="#">Best sellers</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Delivery & returns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            <h3 class="footer-title">QUICK LINK</h3>
                            <ul>
                                <li><a href="#">New collection</a></li>
                                <li><a href="#">Best sellers</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Delivery & returns</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER MIDDLE AREA END -->
        <!-- FOOTER BOTTOM AREA START -->
        <div class="footer-bottom">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="copy-right">
                            Copyright @ 2016 <a href="http://bootexperts.com/">Bootexperts</a>. All rights reserved.
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="footer-socials">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER BOTTOM AREA END -->


        <!-- NEWS LATTER MODAL START-->
        <div class="newslatterModal">
            <div class="modal fade" id="newslatterModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                        </div>
                        <div class="modal-body">
                            <div class="col-sm-5">
                                <div class="newsletter-bg">
                                    <img alt="background newsletter" src="img/newsletter.jpg">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="newsletter-desc">
                                    <h3>JOIN OUR NEWSLETTER</h3>
                                    <p>Sign up for our newsletter and get <span>20%</span> off your next order. Pretty sweet, we know.</p>
                                    <div class="newsletter-form">
                                        <form method="post" action="#">
                                            <p>
                                                <input type="email" placeholder="Type your email here">
                                            </p>
                                            <p>
                                                <input type="submit" value="Subscribe">
                                            </p>
                                            <div class="newsletter-checkbox">
                                                <input type="checkbox">
                                                <span>Don’t show this popup again</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
        </div>
        <!-- NEWS LATTER MODAL END-->


		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Nivo slider js -->        
        <script src="custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="custom-slider/home.js" type="text/javascript"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- jquery.mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- fancybox js -->
        <script src="js/fancybox/jquery.fancybox.pack.js"></script>
        <!-- jquery.counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.js"></script>
         <!-- elevateZoom js  -->
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
        <!-- jquery.bxslider.min.js -->       
        <script src="js/jquery.bxslider.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.devitems.com/raymond-preview/raymond/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 16:39:35 GMT -->
</html>