

<?php include('header.php');?>
        <!-- BREADCRUMB-AREA-START -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="#">Home</a> | </li>
                                <li><a href="#">Men</a> | </li>
                                <li><a href="#">Men's Coast</a> | </li>
                                <li><span>New Oxford Blazer</span></li>
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
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 page-content">
                        <!-- product-over-view-tab-start -->
                           <?php 
                                $conn=mysqli_connect("localhost","root","","raymond");
                                    $id=$_GET['id'];
                                $sql=mysqli_query($conn,"select * from product where pid='$id'");
                                $row=mysqli_fetch_array($sql);
                                ?>
                        <div class="product-view-area">
                            <div class="row">

                                <div class="col-sm-6 col-md-6">
                                    <div class="zoomWrapper">
                                        <div id="img-1" class="product-image">
                                            <a href="#">
                                                <img id="zoom1" src="../theme/kenny/uploads/<?php echo $row['image'] ?>" data-zoom-image="../theme/kenny/uploads/<?php echo $row['image'] ?>" alt="big-1">
                                            </a>
                                            <span class="onsale">Sale!</span>
                                        </div>
                                       
                                    </div>
                                </div>
                             
                                <div class="col-sm-6 col-md-6">
                                    <div class="item-content-info">
                                        <h2>
                                            <a href="#"><?php echo $row['pname'] ?></a>
                                        </h2>
                                        <div class="ro-rate">
                                            <div class="star-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a class="review-link" href="#">
                                                <span>2</span>
                                                 Review (s) / Add your Review
                                            </a>
                                        </div>
                                        <div class="product-price-meta">
                                            <div class="price">
                                                <span class="price"><span>&#8377;</span><?php echo $row['price']?></span>
                                                <!-- <span class="new-price">$150-$610</span> -->
                                            </div>
                                            <div class="stock"> Avaiability: <span> in stock</span></div>
                                        </div>
                                        <div class="product-desc">
                                            <?php echo $row['description']?>
                                        </div>
                                        <div class="product-option">

                                           
                                            <form action="cart_insert_db.php" method="post">
                                                <table>
                                                    <tr>
                                                       
                                                            <?php $id=$row['pid'];
                                                             ?>
                                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                                        
                                                        <td class="label-text">
                                                            <label>Size</label>
                                                            <span> *</span>
                                                        </td>
                                               
                                                        <td class="value">
                                                            <select name="size" placeholder="Choose an option">
                                                              <?php  
                                                              $sizeexpolde = explode(",",$row['size']);
                                                              // print_r($sizeexpolde);
                                                              // die(); 
                                                              $counter=count($sizeexpolde);

                                                              for($i =0;$i<$counter;$i++)
                                                              {
                                                                echo "<option>".$sizeexpolde[$i]."</option>";
                                                              }

                                                              ?>
                                                            </select>                     
                                                        </td>
                                                    </tr>
                                                </table>
                                        
                                

                                                <div class="quantity-inc">
                                                    <label>Qty<span> *</span></label>
                                                    <div class="numbers-row">
                                                        <span class="dec button">-</span>
                                                        <input type="text" value="1" name="quan">
                                                        <span class="inc button">+</span>
                                                   </div>
                                                </div>
                                                 <div class="select-price">
                                                    <span>$155.00</span>
                                                </div>
                                                <div class="product-button">
                                                    <ul>
                                                        
                                                        <li><button type="submit" class="btn btn-danger">Add to cart</button></li>
                                                        <li>
                                                            <a href="#"><i class="pe-7s-like"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="pe-7s-repeat"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-over-view-tab-end -->
                        <div class="product-over-view-tab">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="prod-tab-menu">
                                        <!-- <ul>
                                            <li class="active"><a aria-expanded="true" href="#description" data-toggle="tab">Description</a></li>
                                            <li class=""><a aria-expanded="false" href="#additionalinformation" data-toggle="tab">Additional Information</a></li>
                                            <li class=""><a aria-expanded="false" href="#reviews" data-toggle="tab">Reviews (1)</a></li>
                                            <li class=""><a aria-expanded="false" href="#tags" data-toggle="tab">TAGS</a></li>
                                        </ul> -->
                                    </div>
                                    <div class="tab-content">
                                       
                                        <div id="additionalinformation" class="tab-pane fade">
                                            <h2>Additional Information</h2>
                                            <table class="shop-attributes">
                                                
                                            </table>
                                        </div>
                                        
                                        <div id="tags" class="tab-pane fade">
                                           <span class="tagged_as">Tags: 
                                                <a href="#">blazer</a>, 
                                                <a href="#">men</a>, 
                                                <a href="#">Oxford</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- product-over-view-tab-end -->
                        <!-- related-product-area-start -->
                        <div class="related-product-area">
                            
                            <div class="row">
                                <div class="product-carosul-2 nav-button-style-one">
                                    <!-- silge-product-start -->
                                    
                                    <!-- silge-product-end -->
                                    <!-- silge-product-start -->
                                    
                                    <!-- silge-product-end -->
                                    <!-- silge-product-start -->
                                    
                                    <!-- silge-product-end -->
                                    <!-- silge-product-start -->
                                    
                                    <!-- silge-product-end -->
                                    <!-- silge-product-start -->
                                    
                                    <!-- silge-product-end -->
                                    <!-- silge-product-start -->
                                    
                                    <!-- silge-product-end -->
                                </div>
                            </div>
                        </div>
                        <!-- related-product-area-end -->

                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 sidebar-area">
                        <!-- special-product-area-start -->
                        
                         <!-- special-product-area-end -->
                         <div class="banner-area">
                            <div class="single-banner">
                                <a href="index.php">
                                    <img alt="" src="img/banner/4.jpg">
                                </a>
                                <div class="banner-text">
                                    <h2>SAVE</h2>
                                    <h3>MEN’S COLLECTION<span> MID SEASON SALE</span></h3>
                                </div>
                            </div>
                        </div>
                        <!-- popular-tag-area-start -->
                        <div class="populer-tag-area">
                           
                        </div>
                        <!-- popular-tag-area-end -->
                    </div>
                </div>
            </div>
        </div>

<?php include('footer.php')?>