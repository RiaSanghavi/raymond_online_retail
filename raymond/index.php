

<?php include('header.php'); ?>

        <!-- SERVICE AREA START -->
        <div class="hm-7 service-area service-area-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-service">
                            <div class="ser-icon">
                                <i class="fa fa-truck flip-horizontal"></i>
                            </div>
                            <div class="service-content">
                                <h5>FREE SHIPPING WORLDWIDE </h5>
                                <p>Donec at mattis purus, ut accumsan nisl.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-service">
                            <div class="ser-icon">
                                <i class="fa fa-mail-forward"></i>
                            </div>
                            <div class="service-content">
                                <h5>100% MONEY BACK </h5>
                                <p>Donec at mattis purus, ut accumsan nisl.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-service">
                            <div class="ser-icon">
                                <i class="fa fa-comments flip-horizontal"></i>
                            </div>
                            <div class="service-content">
                                <h5>ONLINE SUPPORT 24/7 </h5>
                                <p>Donec at mattis purus, ut accumsan nisl.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SERVICE AREA END -->
        <!-- SLIDER AREA START -->
        <div class="slider-and-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="slider-area slider-two">
                            <div id="ensign-nivoslider-2" class="">   
                                <img src="img/slider/home-2/1.jpg" alt="" title="#slider-direction-1"  />
                                <img src="img/slider/home-2/2.jpg" alt="" title="#slider-direction-2"  />
                            </div>
                            <!-- direction 1 -->
                            <div id="slider-direction-1" class="slider-direction">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <div class="slider-text color-2">
                                        <div class="sl-heading">
                                            <h2 class="bounceInUp">NEW COLLENTION</h2>
                                            <h2 class="off-text fadeInLeft">WOMEN JACKETS</h2>
                                        </div>
                                        <div class="sub-title">
                                            <p class="fadeInDown">      Look professional<br/>       Feel comfortable!</p>
                                        </div>
                                        <a href="shop_men.php?update=12" class="sl-button fadeInUp">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <!-- direction 2 -->
                            <div id="slider-direction-2" class="slider-direction">
                                <div class="slider-progress"></div>
                                <div class="slider-content">
                                    <div class="slider-text">
                                        <div class="sl-heading">
                                            <h2 class="bounceInUp">NEW COLLENTION</h2>
                                            <h2 class="off-text fadeInLeft">SPCIAL TODAY</h2>
                                        </div>
                                        <div class="sub-title">
                                            <p class="fadeInDown">Lorem Ipsum is simply dummy text of the printing and typesetting<br/> industry.Lorem Ipsum has been the industry's standard dummy.</p>
                                        </div>
                                        <a href="#" class="sl-button fadeInUp">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-area">
                            <div class="single-banner">
                                <a href="shop_men.php?update=8">
                                    <img src="img/banner/4.jpg" alt="">
                                </a>
                                <div class="banner-text">
                                    <h2>SAVE</h2>
                                    <h3>MEN’S COLLECTION<span> MID SEASON SALE</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDER AREA END -->
		
        <!-- ADD BANNER AREA TOP START -->
        <div class="add-banner-area banner-two marg-b70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 hidden-xs">
                        <div class="banner-inner-info">
                            <div class="banner-content">
                                <div class="bn-title">
									<h2>THE TRENDY 2019<span>BEAUTIFUL FOOTWEAR COLLECTION</span></h2>
                                </div>
                                <div class="bn-buttons">
                                    <a href="shop_men.php?update=13">SHOP NOW</a>
                                </div>
                            </div>
                            <div class="bn-image image-1">
                                <a href="shop_men.php?update=13">
                                    <img alt="banner" src="img/banner/5.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="bn-image">
                            <a href="shop_men.php?update=10">
                                <img alt="banner" src="img/banner/6.jpg">
                            </a>
                            <div class="content-title">
                                <h2>THE BIGGEST<span>WINTTER COLLECTION</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ADD BANNER TOP AREA END -->
        <!-- PRODUCT AREA START -->
        <div class="product-area marg-b70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title">
                            <h2>FEATURED PRODUCTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-carosul nav-button-style-one">
                        <?php
                        $conn=mysqli_connect("localhost","root","","raymond");
                        $sql=mysqli_query($conn,"select * from product where p_category='Special Collection' limit 4");
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                        
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a href="#">
                                        <img class="primary-image" alt="Special" src="../theme/kenny/uploads/<?php echo $row['image'] ?>">
                                        <img class="secondary-image" alt="Special" src="../theme/kenny/uploads/<?php echo $row['image'] ?>">
                                    </a>
                                    <span class="onsale">Sale!</span>
                                    <div class="category-action-buttons">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="category">
                                                    <a href="#">Women</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="action-button">
                                                    <ul>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#productModal" title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </li>
                                                        <li>
															<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
														</li>
                                                        <li>
                                                            <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="pe-7s-repeat"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="cart-button" data-toggle="tooltip" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-title">
                                        <a href="#">Faux Leather Jacket</a>
                                    </div>
                                    <div class="price-rating">
                                        <div class="star-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span class="old-price">$120</span>
                                            <span class="new-price">$90</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                        
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="view-more-link">
                            <a href="#">
                                <span><i class="fa fa-plus"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT AREA END -->
        <!-- POPULAR-CATEGORY-AREA START -->
        <div class="popular-category-area marg-b70">
            <div class="container">
                <div class="row">
                    <div class="popular-category-carosul-2 nav-button-style-one">
                        <!-- single-category-product-start -->
                        <div class="col-lg-12 col-md-12">
                            <div class="single-category-product">
                                <a href="single-product.php?id=18">
                                    <div class="category-thumb">
                                        <img src="../theme/kenny/uploads/TEXTURED RUSTIC OVERSHIRT.jpg" alt="Category">
                                    </div>
                                    <div class="category-title">
                                        <h3>TEXTURED RUSTIC OVERSHIRT<small>( 1 Products )</small></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- single-category-product-end -->
                        
                        <!-- single-category-product-start -->
                        <div class="col-lg-12 col-md-12">
                            <div class="single-category-product">
                                <a href="single-product.php?id=24">
                                    <div class="category-thumb">
                                        <img src="../theme/kenny/uploads/WHITE RETRO SNEAKERS.jpg" alt="Category">
                                    </div>
                                    <div class="category-title">
                                        <h3>SHOES<small>( 1 Products )</small></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- single-category-product-end -->
                        <!-- single-category-product-start -->
                        <div class="col-lg-12 col-md-12">
                            <div class="single-category-product">
                                <a href="single-product.php?id=9">
                                    <div class="category-thumb">
                                        <img src="../theme/kenny/uploads/METALLIC LEAF EARRINGS.jpg" alt="Category">
                                    </div>
                                    <div class="category-title">
                                        <h3>Jewelry<small>( 1 Products )</small></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- single-category-product-end -->
                        <!-- single-category-product-start -->
                        <div class="col-lg-12 col-md-12">
                            <div class="single-category-product">
                                <a href="single-product.php?id=13">
                                    <div class="category-thumb">
                                        <img src="../theme/kenny/uploads/ANIMAL PRINT LEATHER FLAT SANDALS.jpg" alt="Category">
                                    </div>
                                    <div class="category-title">
                                        <h3>shoes<small>( 1 Products )</small></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- single-category-product-end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- POPULAR-CATEGORY-AREA END -->
        <!-- OUR-FEATURE-PRODUCT-AREA SATR--> 
        <div class="our-feature-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="special-product-area">
                            <div class="section-title">
                                <h2>MEN'S SPECIAL</h2>
                            </div>
                            <?php
                        $conn=mysqli_connect("localhost","root","","raymond");
                        $sql=mysqli_query($conn,"select * from product where p_category='Men' limit 3");
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                            <!-- single-product-start -->
                            <div class="special-single-product">
                                <div class="sp-img">
                                    <a href="#">
                                        <img alt="" src="../theme/kenny/uploads/<?php echo $row['image'] ?>">
                                    </a>
                                </div>
                                <div class="sp-prod-info">
                                    <div class="product-title">
                                        <a href="single-product.php?id=<?php echo $row['pid']?>"><?php echo $row['pname']?></a>
                                    </div>
                                    <div class="price-rating">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span ><?php echo $row['price']?></span>
                                           
                                        </div>
                                    </div>
                                    <div class="action-button">
                                        <ul>
                                            <li>
                                                <a title="" data-toggle="tooltip" class="cart-button" href="single-product.php?id=<?php echo $row['pid']?>" data-original-title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            </li>
                                            <li>
												<a title="" data-toggle="tooltip" href="#" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
											</li>
                                            <li>
                                                <a title="" data-toggle="tooltip" href="#" data-original-title="Add to Compare"><i class="pe-7s-repeat"></i></a>
                                            </li>
                                            <li>
                                                <a title="Quick View" data-target="#productModal" data-toggle="modal" href="#"><i class="pe-7s-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                       <?php } ?>
                            <!-- single-product-end -->
                     </div>
                 </div>
                    <div class="col-md-4">
                        <div class="special-product-area">
                            <div class="section-title">
                                <h2>WOMEN'S SPECIAL</h2>
                            </div>
                            <?php
                        $conn=mysqli_connect("localhost","root","","raymond");
                        $sql=mysqli_query($conn,"select * from product where p_category='women' limit 3");
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                            <!-- single-product-start -->
                            <div class="special-single-product">
                                <div class="sp-img">
                                    <a href="#">
                                        <img alt="" src="../theme/kenny/uploads/<?php echo $row['image'] ?>">
                                    </a>
                                </div>
                                <div class="sp-prod-info">
                                    <div class="product-title">
                                        <a href="single-product.php?id=<?php echo $row['pid']?>"><?php echo $row['pname']?></a>
                                    </div>
                                    <div class="price-rating">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span ><?php echo $row['price']?></span>
                                           
                                        </div>
                                    </div>
                                    <div class="action-button">
                                        <ul>
                                            <li>
                                                <a title="" data-toggle="tooltip" class="cart-button" href="single-product.php?id=<?php echo $row['pid']?>" data-original-title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            </li>
                                            <li>
                                                <a title="" data-toggle="tooltip" href="#" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            </li>
                                            <li>
                                                <a title="" data-toggle="tooltip" href="#" data-original-title="Add to Compare"><i class="pe-7s-repeat"></i></a>
                                            </li>
                                            <li>
                                                <a title="Quick View" data-target="#productModal" data-toggle="modal" href="#"><i class="pe-7s-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                       <?php } ?>
                   </div>
               </div>
                            <!-- single-product-end -->

                  <div class="col-md-4">
                        <div class="special-product-area">
                            <div class="section-title">
                                <h2>ACCESSORIES</h2>
                            </div>
                            <?php
                        $conn=mysqli_connect("localhost","root","","raymond");
                        $sql=mysqli_query($conn,"select * from product where p_subcategory='accessories' limit 3");
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                            <!-- single-product-start -->
                            <div class="special-single-product">
                                <div class="sp-img">
                                    <a href="#">
                                        <img alt="" src="../theme/kenny/uploads/<?php echo $row['image'] ?>">
                                    </a>
                                </div>
                                <div class="sp-prod-info">
                                    <div class="product-title">
                                        <a href="single-product.php?id=<?php echo $row['pid']?>"><?php echo $row['pname']?></a>
                                    </div>
                                    <div class="price-rating">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span ><?php echo $row['price']?></span>
                                           
                                        </div>
                                    </div>
                                    <div class="action-button">
                                        <ul>
                                            <li>
                                                <a title="" data-toggle="tooltip" class="cart-button" href="single-product.php?id=<?php echo $row['pid']?>" data-original-title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            </li>
                                            <li>
                                                <a title="" data-toggle="tooltip" href="#" data-original-title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                            </li>
                                            <li>
                                                <a title="" data-toggle="tooltip" href="#" data-original-title="Add to Compare"><i class="pe-7s-repeat"></i></a>
                                            </li>
                                            <li>
                                                <a title="Quick View" data-target="#productModal" data-toggle="modal" href="#"><i class="pe-7s-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                       <?php } ?>
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- OUR-FEATURE-PRODUCT-AREA END-->
        <!-- BLOG AREA START -->
        <div class="blog-area marg-b70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title">
                            <h2>LATEST FROM BLOGS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-carosul nav-button-style-one">
                        <!-- single-blog-start -->
                        <div class="col-md-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="img/blog/ACCESSORISE FOR THE BEACH AND BEYOND.jpg" alt="Blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-info">
                                        <span class="author-name">
                                            <i class="fa fa-user"></i>By 
                                            <a href="#">Johny Lee</a>
                                        </span>
                                        
                                       <span class="comments-number">
                                            <i class="fa fa-comment"></i>0 Comment
                                        </span>
                                    </div>
                                    <div class="title-desc">
                                        <a href="https://www2.hm.com/en_in/life/fashion/editors-picks/accessorize-for-the-beach-and-beyond.html"><h4>ACCESSORISE FOR THE BEACH AND BEYOND</h4></a>
                                        <p>From shells and coins to straw hats and scarves — these are the sun-ready accessories that amp up your off-duty style.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-blog-end -->
                  
                        <!-- single-blog-start -->
                        <div class="col-md-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="img/blog/SUMMER’S MOST WANTED SUNGLASSES.jpg" alt="Blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-info">
                                        <span class="author-name">
                                            <i class="fa fa-user"></i>By 
                                            <a href="#">Johny Lee</a>
                                        </span>
                                    
                                       <span class="comments-number">
                                            <i class="fa fa-comment"></i>0 Comment
                                        </span>
                                    </div>
                                    <div class="title-desc">
                                        <a href="https://www2.hm.com/en_in/life/fashion/editors-picks/summers-most-wanted-sunglasses.html"><h4>SUMMER’S MOST WANTED SUNGLASSES</h4></a>
                                        <p>This year we go big again, with ’70s-inspired gradient glasses and pearl-detailed frames. These are the summer’s six standout shades!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-blog-end -->
                        <!-- single-blog-start -->
                        <div class="col-md-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="img/blog/3 TAKES ON THE WRAP SKIRT.jpg" alt="Blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-info">
                                        <span class="author-name">
                                            <i class="fa fa-user"></i>By 
                                            <a href="#">Johny Lee</a>
                                        </span>
                                       
                                       <span class="comments-number">
                                            <i class="fa fa-comment"></i>0 Comment
                                        </span>
                                    </div>
                                    <div class="title-desc">
                                        <a href="https://www2.hm.com/en_in/life/fashion/the-tryout/3-takes-on-the-wrap-skirt.html"><h4>3 TAKES ON THE WRAP SKIRT</h4></a>
                                        <p>Casual, cool and elegant — the wrap skirt is a cornerstone in every summer wardrobe. Here’s how to style it for any occasion.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-blog-end -->
            
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG AREA END -->

        <!-- FOOTER TOP AREA START -->
        <?php include('footer.php')?>