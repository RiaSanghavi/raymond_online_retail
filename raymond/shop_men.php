<?php include('header.php') ;

// $id="";
?>
        <!-- PAGE-HEADER-AREA-START -->
        <div class="page-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title">
                            <h2>Shop</h2>
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
                                <li><span>Shop</span></li>
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
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 sidebar-area">
                        <!-- category-area-start -->
                        <div class="category-area">
                            <div class="section-title">
                                <h2>Categories</h2>
                            </div>
                            <div id="cate-toggle" class="sideber-menu">
                                <ul>


                                                  <?php
                                                  $id=$_GET['update'];
                                                    $conn=mysqli_connect("localhost","root","","raymond");
                                                    $sql=mysqli_query($conn,"select * from subcategory where category in(SELECT category from subcategory where id='$id')");

                                                     while($row=mysqli_fetch_array($sql))
                                                    {
                                                   ?>
                                                   <ul>
                                               <li><a href="shop_men.php?update=<?php echo $row['id']?>"><?php echo $row['subcategory']?>
                                                
                                                <span class="count"></span></a></li>
                                        </ul>
                                                
                                               <?php  }
                                                        ?> 
                                        
                            </div>
                        </div>
                        <!-- category-area-end -->
                   
                       
                        <!-- price-slider-area-start -->
                       <div class="slidecontainer">
  <input type="range" min="1" max="10000" value="50" class="slider" id="myRange">
  <p>Value: <span id="demo"></span></p>
</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

                        <!-- price-slider-area-end -->
                        <!-- compare-area-start -->
                       
                        <!-- compare-area-end -->
                        <!-- special-product-area-start -->

                        <div class="special-product-area">
                            <div class="section-title">
                                <h2>Special</h2>
                            </div>
                            <div class="special-product">
                                <!-- special-single-product start -->
                                <div class="special-single-product">
                                    <div class="sp-img">
                                        <a href="#">
                                            <img alt="" src="img/product/special/1.jpg">
                                        </a>
                                    </div>
                                    <div class="sp-prod-info">
                                        <div class="product-title">
                                            <a href="#">Faux Leather Jacket</a>
                                        </div>
                                        <div class="price-rating">
                                            <div class="rating">
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
                                <!-- special-single-product end-->
                                <!-- special-single-product start -->
                                <div class="special-single-product">
                                    <div class="sp-img">
                                        <a href="#">
                                            <img alt="" src="img/product/special/2.jpg">
                                        </a>
                                    </div>
                                    <div class="sp-prod-info">
                                        <div class="product-title">
                                            <a href="#">Faux Leather Jacket</a>
                                        </div>
                                        <div class="price-rating">
                                            <div class="rating">
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
                                <!-- special-single-product end-->
                                <!-- special-single-product start -->
                                <div class="special-single-product">
                                    <div class="sp-img">
                                        <a href="#">
                                            <img alt="" src="img/product/special/3.jpg">
                                        </a>
                                    </div>
                                    <div class="sp-prod-info">
                                        <div class="product-title">
                                            <a href="#">Faux Leather Jacket</a>
                                        </div>
                                        <div class="price-rating">
                                            <div class="rating">
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
                                <!-- special-single-product end-->
                            </div>
                        </div>
                         <!-- special-product-area-end -->
                        <!-- popular-tag-area-start -->
                        <!--  -->
                        <!-- popular-tag-area-end -->
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 page-content">
                        <div class="toolbar">
                            <div class="view-mode">
                                <span>View as:</span>
                                <ul>
                                    <li class="active"><a data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                    <li><a data-toggle="tab" href="#list"><i class="fa fa-list"></i></a></li>
                                </ul>
                            </div>
                            <div class="ordering-product">
                                <div class="sorter">
                                    <span>Sort by:</span>
                                    <select>
                                        <option>Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                    </select>
                                </div>
                                <div class="limiter">
                                    <span>Show:</span>
                                    <select>
                                        <option>12</option>
                                        <option>24</option>
                                        <option>36</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- shop-product-list-start -->
                        <div class="product-list-area" >
                            <div class="row">
                                <div class="tab-content">
                                    <!-- product-grid-start -->
                                    <div id="grid" class="tab-pane fade in active">
                                        <!-- silge-product-start -->

                                        <?php 
                                            $conn=mysqli_connect("localhost","root","","raymond");
                                            if(isset($_GET['update']))
                                            {
                                            $id=$_GET['update'];
                                             $sql="SELECT * FROM product where p_category in (SELECT category from subcategory where id='$id') and p_subcategory in (SELECT subcategory from subcategory where id='$id')";

                                                  $result=mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_array($result))
                                            {
                                                $id=$row['pid'];
                                                $name=$row['pname'];

                                              ?>

                                                <div class="col-sm-6 col-md-4"> 
                                            <div class="single-product">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img  alt="Special" src="../theme/kenny/uploads/<?php echo $row['image'] ?>" >
                                                        
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
                                                                    
                                                                            <a href="single-product.php?id=<?php echo $id ?>" class="cart-button" data-toggle="tooltip" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-title">
                                                        <a href="single-product.php?id=<?php echo $id ?>"><?php echo $row['pname']; ?></a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <div class="star-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price"> <span>&#8377;</span><?php echo $row['price'];?></span>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                           <?php
                                           }
                                       }
                                        ?>
                                        
                                        <!-- silge-product-end -->
                                        <!-- silge-product-start -->
                
                                        <!-- silge-product-end -->
                                    </div>
                                    <!-- product-grid-end -->
                                    <!-- product-list-start -->
                                    <div id="list" class="tab-pane fade">
                                        <!-- single-product-start -->
                                        <div class="col-md-12">
                                            <div class="single-list-product">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="img/product/1.jpg" alt="">
                                                    </a>
                                                    <span class="new">New!</span>
                                                </div>
                                                <div class="item-content-info">
                                                    <h2>
                                                        <a href="#">New Long Blazer</a>
                                                    </h2>
                                                    <div class="category">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <div class="list-price-rating">
                                                        <div class="ro-rate">
                                                            <div class="star-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="review-link">
                                                                <span>2</span>
                                                                 Review (s) / Add your Review
                                                            </a>
                                                        </div>
                                                        <div class="price">
                                                            <span class="old-price">$120</span>
                                                            <span class="new-price">$90</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                    </div>
                                                    <div class="product-button">
                                                        <ul>
                                                            <li><a href="#" class="curt-button">Select options</a></li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-like"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-repeat"></i></a>
                                                            </li>
                                                            <li>
                                                                <a title="Quick View" data-target="#productModal" data-toggle="modal" href="#"><i class="pe-7s-search"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                        <!-- single-product-start -->
                                        <div class="col-md-12">
                                            <div class="single-list-product">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="img/product/2.jpg" alt="">
                                                    </a>
                                                    <span class="new">New!</span>
                                                </div>
                                                <div class="item-content-info">
                                                    <h2>
                                                        <a href="#">New Long Blazer</a>
                                                    </h2>
                                                    <div class="category">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <div class="list-price-rating">
                                                        <div class="ro-rate">
                                                            <div class="star-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="review-link">
                                                                <span>2</span>
                                                                 Review (s) / Add your Review
                                                            </a>
                                                        </div>
                                                        <div class="price">
                                                            <span class="old-price">$120</span>
                                                            <span class="new-price">$90</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                    </div>
                                                    <div class="product-button">
                                                        <ul>
                                                            <li><a href="#" class="curt-button">Select options</a></li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-like"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-repeat"></i></a>
                                                            </li>
                                                            <li>
                                                                <a title="Quick View" data-target="#productModal" data-toggle="modal" href="#"><i class="pe-7s-search"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                        <!-- single-product-start -->
                                        <div class="col-md-12">
                                            <div class="single-list-product">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="img/product/3.jpg" alt="">
                                                    </a>
                                                    <span class="new">New!</span>
                                                </div>
                                                <div class="item-content-info">
                                                    <h2>
                                                        <a href="#">New Long Blazer</a>
                                                    </h2>
                                                    <div class="category">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <div class="list-price-rating">
                                                        <div class="ro-rate">
                                                            <div class="star-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="review-link">
                                                                <span>2</span>
                                                                 Review (s) / Add your Review
                                                            </a>
                                                        </div>
                                                        <div class="price">
                                                            <span class="old-price">$120</span>
                                                            <span class="new-price">$90</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                    </div>
                                                    <div class="product-button">
                                                        <ul>
                                                            <li><a href="#" class="curt-button">Select options</a></li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-like"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-repeat"></i></a>
                                                            </li>
                                                            <li>
                                                                <a title="Quick View" data-target="#productModal" data-toggle="modal" href="#"><i class="pe-7s-search"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                        <!-- single-product-start -->
                                        <div class="col-md-12">
                                            <div class="single-list-product">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="img/product/4.jpg" alt="">
                                                    </a>
                                                    <span class="new">New!</span>
                                                </div>
                                                <div class="item-content-info">
                                                    <h2>
                                                        <a href="#">New Long Blazer</a>
                                                    </h2>
                                                    <div class="category">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <div class="list-price-rating">
                                                        <div class="ro-rate">
                                                            <div class="star-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="review-link">
                                                                <span>2</span>
                                                                 Review (s) / Add your Review
                                                            </a>
                                                        </div>
                                                        <div class="price">
                                                            <span class="old-price">$120</span>
                                                            <span class="new-price">$90</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                    </div>
                                                    <div class="product-button">
                                                        <ul>
                                                            <li><a href="#" class="curt-button">Select options</a></li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-like"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-repeat"></i></a>
                                                            </li>
                                                            <li>
                                                                <a title="Quick View" data-target="#productModal" data-toggle="modal" href="#"><i class="pe-7s-search"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                        <!-- single-product-start -->
                                        <div class="col-md-12">
                                            <div class="single-list-product">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="img/product/5.jpg" alt="">
                                                    </a>
                                                    <span class="new">New!</span>
                                                </div>
                                                <div class="item-content-info">
                                                    <h2>
                                                        <a href="#">New Long Blazer</a>
                                                    </h2>
                                                    <div class="category">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <div class="list-price-rating">
                                                        <div class="ro-rate">
                                                            <div class="star-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="review-link">
                                                                <span>2</span>
                                                                 Review (s) / Add your Review
                                                            </a>
                                                        </div>
                                                        <div class="price">
                                                            <span class="old-price">$120</span>
                                                            <span class="new-price">$90</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                    </div>
                                                    <div class="product-button">
                                                        <ul>
                                                            <li><a href="#" class="curt-button">Add to cart</a></li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-like"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-repeat"></i></a>
                                                            </li>
                                                            <li>
                                                                <a title="Quick View" data-target="#productModal" data-toggle="modal" href="#"><i class="pe-7s-search"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                        <!-- single-product-start -->
                                        <div class="col-md-12">
                                            <div class="single-list-product">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="img/product/6.jpg" alt="">
                                                    </a>
                                                    <span class="new">New!</span>
                                                </div>
                                                <div class="item-content-info">
                                                    <h2>
                                                        <a href="#">New Long Blazer</a>
                                                    </h2>
                                                    <div class="category">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <div class="list-price-rating">
                                                        <div class="ro-rate">
                                                            <div class="star-rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="#" class="review-link">
                                                                <span>2</span>
                                                                 Review (s) / Add your Review
                                                            </a>
                                                        </div>
                                                        <div class="price">
                                                            <span class="old-price">$120</span>
                                                            <span class="new-price">$90</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                                    </div>
                                                    <div class="product-button">
                                                        <ul>
                                                            <li><a href="#" class="curt-button">Select options</a></li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-like"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="pe-7s-repeat"></i></a>
                                                            </li>
                                                            <li>
                                                                <a title="Quick View" data-target="#productModal" data-toggle="modal" href="#"><i class="pe-7s-search"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                    <!-- product-list-end -->
                                </div>
                                 <!-- pagination-area-start -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="shop-bottom">
                                        <div class="view-mode">
                                            <span>View as:</span>
                                            <ul>
                                                <li class="active"><a href="#grid" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                                                <li><a href="#list" data-toggle="tab"><i class="fa fa-list"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="paginations">
                                            <ul>
                                                <li><a href="#" class="current">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- pagination-area-end -->
                            </div>
                        </div>
                        <!-- shop-product-list-end -->
                    </div>
                </div>
            </div>
        </div>
        
        <?php include('footer.php'); ?>