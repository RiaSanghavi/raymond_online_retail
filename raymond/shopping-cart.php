
<?php
$conn=mysqli_connect("localhost","root","","raymond");

if(isset($_GET['delete'])){
 
$id =$_GET['delete'];
$sql=mysqli_query($conn, "delete from cart where id='$id'");

if ($sql) {
    
  header("Location: shopping-cart.php");
}
else{
  echo "error";
}
}
?>
<?php 
include('header.php'); 
?>

        <!-- HEADER AREA END -->
        <!-- PAGE-HEADER-AREA-START -->
        <div class="page-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title">
                            <h2>Cart</h2>
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
                                <li><span>Cart</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB-AREA-END -->
        <div class="main-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive">
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    // session_start();
                                        $id=$_SESSION['id'];
                                            $conn=mysqli_connect("localhost","root","","raymond");
                                            
                                              $sql="SELECT * FROM cart where user_id='$id'";
                                           $final=0;
                                                  $result=mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_array($result))
                                            {
                                                $total=0;
                                                $a=$row['quantity'];
                                                $b=$row['price'];
                                                $total=$a*$b;
                                                $final=$final+$total;
                                    echo'
                                    
                                    <tr>
                                        <td>
                                          
                                            <div class="cart-image">
                                                <a href="#">
                                                    <img src="../theme/kenny/uploads/'.$row['image'].'" alt="Cart" style="height:250px;width:200px;">
                                                </a>
                                            </div>
                                            <div class="cart-details">
                                                <a href="#">'.$row['pname'].'</a>
                                               
                                            </div>
                                        </td>
                                        <td>
                                        <form method="post" action="update_cart.php?id='.$row['id'].'" >
                                            <div class="qty">
                                                <input type="number" value="'.$row['quantity'].'" name="quantity" min="1" size="4" value="1">
                                                <a class="remove" href="shopping-cart.php?delete='.$row['id'].'">x</a>
                                                <input type="submit" value="Update" name="update" class="btn btn-warning" > 
                                        
                                            </div>
                                        </form>
                                        </td>
                                        <td>
                                            <span class="cart-price"><span>&#8377;</span>'.$row['price'].'</span>

                                        </td>
                                        <td>

                                            <span class="cart-total-price"><span>&#8377;</span>'.$total.'</span>
                                        </td>
                                        
                                        
                                    </tr>
                                    
                                    ';
                                }
                ?>
                                     
                                    <tr>
                                        <td class="" colspan="4">
                                           
                                        </td>
                                    </tr>
                                 </tbody>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
                

                <!-- shipping area-start -->
                <div class="shipping-area">
                    <div class="row">
                        <div class="col-lg-7 col-xs-12 col-sm-8">
                            <div class="shipping-content">
                                <div class="sh-tab-menu">
                                    <ul>
                                        <li class="active"><a data-toggle="tab" href="#shipping">Estimate Shipping & Tax</a></li>
                                        <li><a data-toggle="tab" href="#couponcode">Use Coupon Code</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="shipping" class="tab-pane fade active in">
                                        <span>Shipping</span>
                                        <ul>
                                            <li>
                                                <input type="radio" checked="checked">
                                                <label>Flat Rate: $100.00</label>
                                            </li>
                                            <li>
                                                <input type="radio">
                                                <label>Local Delivery</label>
                                            </li>
                                            <li>
                                                <input type="radio">
                                                <label>Local Pickup</label>                 
                                            </li>
                                        </ul>
                                        <form action="#">
                                            <p>Enter your destination to get a shipping estimate</p>
                                            <div class="form-field-area">
                                                <p>
                                                    <label>Country 
                                                        <span class="required">*</span>
                                                    </label>
                                                    <select>
                                                        <option value="">Select a country…</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option selected="selected" value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="PW">Belau</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                    </select>
                                                </p>
                                                <p>
                                                    <label>District 
                                                        <span class="required">*</span>
                                                    </label>
                                                    <select>
                                                        <option value="">Select an option…</option>
                                                        <option value="BAG">Bagerhat</option>
                                                        <option value="BAN">Bandarban</option>
                                                        <option value="BAR">Barguna</option>
                                                        <option value="BARI">Barisal</option>
                                                        <option value="BHO">Bhola</option>
                                                        <option value="BOG">Bogra</option>
                                                        <option value="BRA">Brahmanbaria</option>
                                                        <option value="CHA">Chandpur</option>
                                                        <option value="CHI">Chittagong</option>
                                                        <option value="CHU">Chuadanga</option>
                                                        <option value="COM">Comilla</option>
                                                        <option value="COX">Cox's Bazar</option>
                                                        <option value="DHA">Dhaka</option>
                                                        <option value="DIN">Dinajpur</option>
                                                        <option value="FAR">Faridpur </option>
                                                        <option value="FEN">Feni</option>
                                                        <option value="GAI">Gaibandha</option>
                                                        <option value="GAZI">Gazipur</option>
                                                        <option value="GOP">Gopalganj</option>
                                                        <option value="HAB">Habiganj</option>
                                                        <option value="JAM">Jamalpur</option>
                                                        <option value="JES">Jessore</option>
                                                        <option value="JHA">Jhalokati</option>
                                                        <option value="JHE">Jhenaidah</option>
                                                        <option value="JOY">Joypurhat</option>
                                                    </select>
                                                </p>
                                                <p>
                                                    <label>Post Code 
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" placeholder="1234567" value="">
                                                </p>
                                                <p>
                                                    <button name="shipping" type="submit">Get Quotes</button>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="couponcode" class="tab-pane fade">
                                        <form action="#" method="post">
                                            <div class="coupon">
                                                <label>Coupon:</label> 
                                                <input type="text" placeholder="Coupon code"> 
                                                <input type="submit" value="Apply Coupon">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-lg-offset-1">
                            <div class="cart-total-table">
                                <table>
                                    <tbody>
                                       
                                        <tr class="order-total">
                                            <th>Total:</th>
                                            <td><span><?php echo $final?></span></td>
                                        </tr>   
                                    </tbody>
                                </table>
                                <div class="proceed-to-checkout">
                                    <a href="#">Continue Shopping</a>
                                    <a href="#" class="confirm-or">Confirm Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shipping area-end -->
            </div>
        </div>        
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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

<!-- Mirrored from demo.devitems.com/raymond-preview/raymond/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 16:39:35 GMT -->
</html>
