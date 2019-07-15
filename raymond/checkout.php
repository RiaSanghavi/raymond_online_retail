<?php include('header.php');?>

		<!-- coupon-area start -->
		<div class="coupon-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="coupon-accordion">
							<!-- ACCORDION START -->
							<h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
							<div id="checkout-login" class="coupon-content">
								<div class="coupon-info">
									<p class="coupon-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
									<form action="#">
										<p class="form-row-first">
											<label>Username or email <span class="required">*</span></label>
											<input type="text" />
										</p>
										<p class="form-row-last">
											<label>Password  <span class="required">*</span></label>
											<input type="text" />
										</p>
										<p class="form-row">                    
											<input type="submit" value="Login" />
											<label>
												<input type="checkbox" />
												 Remember me 
											</label>
										</p>
										<p class="lost-password">
											<a href="#">Lost your password?</a>
										</p>
									</form>
								</div>
							</div>
							<!-- ACCORDION END -->  
							<!-- ACCORDION START -->
							<h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
							<div id="checkout_coupon" class="coupon-checkout-content">
								<div class="coupon-info">
									<form action="#">
										<p class="form-row-first">
											<input type="text" placeholder="Coupon code" />
										</p>
										<p class="form-row-last">
											<input type="submit" value="Apply Coupon" />
										</p>
									</form>
								</div>
							</div>
							<!-- ACCORDION END -->                      
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- coupon-area end -->
		<!-- checkout-area start -->
		<div class="checkout-area">
			<div class="container">
				<div class="row">
					<form action="#">
						<div class="col-lg-6 col-md-6">
							<div class="checkbox-form">                     
								<h3>Shipping Address Details</h3>
								<div class="row">
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>First Name <span class="required">*</span></label>                                       
											<input type="text" placeholder="" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Last Name <span class="required">*</span></label>                                        
											<input type="text" placeholder="" />
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Company Name</label>
											<input type="text" placeholder="" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Email Address <span class="required">*</span></label>                                        
											<input type="text" placeholder="" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Phone <span class="required">*</span></label>                                        
											<input type="text" placeholder="" />
										</div>
									</div>
									<div class="col-md-12">
										<div class="country-select">
											<label>Country <span class="required">*</span></label>
											<select>
											  <option value="volvo">bangladesh</option>
											  <option value="saab">Algeria</option>
											  <option value="mercedes">Afghanistan</option>
											  <option value="audi">Ghana</option>
											  <option value="audi2">Albania</option>
											  <option value="audi3">Bahrain</option>
											  <option value="audi4">Colombia</option>
											  <option value="audi5">Dominican Republic</option>
											</select>                                       
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Address <span class="required">*</span></label>
											<input type="text" placeholder="Street address" />
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">                                    
											<input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Town / City <span class="required">*</span></label>
											<input type="text" placeholder="Town / City" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="country-select">
											<label>State<span class="required">*</span></label>                         
											<select>
												  <option>Alabama</option>
												  <option>Alaska</option>
												  <option>Arizona</option>
												  <option>Arkansas</option>
												  <option>Califonia</option>
												  <option>Delaware</option>
												  <option>Florida</option>
												  <option>Georgia</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Zip <span class="required">*</span></label>                                      
											<input type="text" placeholder="Postcode / Zip" />
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list create-acc"> 
											<input id="cbox" type="checkbox" />
											<label>Create an account?</label>
										</div>
										<div id="cbox_info" class="checkout-form-list create-account">
											<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
											<label>Account password  <span class="required">*</span></label>
											<input type="password" placeholder="password" />    
										</div>
									</div>                              
								</div>
								<div class="different-address">
										<div class="ship-different-title">
											<h3>
												<label>Ship to a different address?</label>
												<input id="ship-box" type="checkbox" />
											</h3>
										</div>
									<div id="ship-box-info" class="row">
										<div class="col-md-6">
											<div class="checkout-form-list">
												<label>First Name <span class="required">*</span></label>                                       
												<input type="text" placeholder="" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="checkout-form-list">
												<label>Last Name <span class="required">*</span></label>                                        
												<input type="text" placeholder="" />
											</div>
										</div>
										<div class="col-md-12">
											<div class="checkout-form-list">
												<label>Company Name</label>
												<input type="text" placeholder="" />
											</div>
										</div>
										<div class="col-md-12">
											<div class="country-select">
												<label>Country <span class="required">*</span></label>
												<select>
												  <option value="volvo">bangladesh</option>
												  <option value="saab">Algeria</option>
												  <option value="mercedes">Afghanistan</option>
												  <option value="audi">Ghana</option>
												  <option value="audi2">Albania</option>
												  <option value="audi3">Bahrain</option>
												  <option value="audi4">Colombia</option>
												  <option value="audi5">Dominican Republic</option>
												</select>                                       
											</div>
										</div>
										<div class="col-md-12">
											<div class="checkout-form-list">
												<label>Address <span class="required">*</span></label>
												<input type="text" placeholder="Street address" />
											</div>
										</div>
										<div class="col-md-12">
											<div class="checkout-form-list">    
												<input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
											</div>
										</div>
										<div class="col-md-12">
											<div class="checkout-form-list">
												<label>Town / City <span class="required">*</span></label>
												<input type="text" placeholder="Town / City" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="country-select">
											<label>State<span class="required">*</span></label>                         
											<select>
												  <option>Alabama</option>
												  <option>Alaska</option>
												  <option>Arizona</option>
												  <option>Arkansas</option>
												  <option>Califonia</option>
												  <option>Delaware</option>
												  <option>Florida</option>
												  <option>Georgia</option>
											</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="checkout-form-list">
												<label>Zip <span class="required">*</span></label>                                      
												<input type="text" placeholder="Postcode / Zip" />
											</div>
										</div>                              
									</div>
									<div class="order-notes">
										<div class="checkout-form-list">
											<label>Order Notes</label>
											<textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
										</div>                                  
									</div>
								</div>                                                  
							</div>
						</div>  
						<div class="col-lg-6 col-md-6">
							<div class="your-order">
								<h3>Your order</h3>
								<div class="your-order-table table-responsive">
									<table>
										<thead>
											<tr>
												<th class="product-name">Product</th>
												<th class="product-total">Total</th>
											</tr>                           
										</thead>
										<tbody>
											<tr class="cart_item">
												<td class="product-name">
													Feugiat justo lacinia <strong class="product-quantity"> × 1</strong>
												</td>
												<td class="product-total">
													<span class="amount">£70.00</span>
												</td>
											</tr>
											<tr class="cart_item">
												<td class="product-name">
													Aenean eu tristique <strong class="product-quantity"> × 1</strong>
												</td>
												<td class="product-total">
													<span class="amount">£70.00</span>
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr class="cart-subtotal">
												<th>Cart Subtotal</th>
												<td><span class="amount">£140.00</span></td>
											</tr>
											<tr class="shipping">
												<th>Shipping</th>
												<td>
													<ul>
														<li>
															<input type="radio" />
															<label>
																Flat Rate: <span class="amount">£18.00</span>
															</label>
														</li>
														<li>
															<input type="radio" />
															<label>Free Shipping:</label>
														</li>
														<li>
															<input type="radio" />
															<label>International Delivery: <span class="amount">£120.00</span></label>
														</li>
													</ul>
												</td>
											</tr>
											<tr class="order-total">
												<th>Order Total</th>
												<td><strong><span class="amount">£215.00</span></strong>
												</td>
											</tr>                               
										</tfoot>
									</table>
								</div>
								<div class="payment-method">
									<div class="payment-accordion">
										<!-- ACCORDION START -->
										<h3 class="open">Direct Bank Transfer</h3>
										<div class="payment-content">
											<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
										</div>
										<!-- ACCORDION END -->  
										<!-- ACCORDION START -->
										<h3>Cheque Payment</h3>
										<div class="payment-content">
											<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
										</div>
										<!-- ACCORDION END -->  
										<!-- ACCORDION START -->
										<h3>PayPal <img src="img/payment.png" alt="" /></h3>
										<div class="payment-content">
											<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
										</div>
										<!-- ACCORDION END -->                                  
									</div>
									<div class="order-button-payment">
										<input type="submit" value="Place order" />
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- checkout-area end -->
   
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
        <!-- elevateZoom js -->
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
        <!-- jquery.bxslider.min.js -->       
        <script src="js/jquery.bxslider.min.js"></script>
        <!-- jquery.collapse js -->
        <script src="js/jquery.collapse.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.devitems.com/raymond-preview/raymond/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 16:39:35 GMT -->
</html>
