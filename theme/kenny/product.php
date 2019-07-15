
<?php 
       session_start();
               // print_r($_SESSION);
               //  die();
               // // die();                                 // print_r($_SESSION);
   if(!isset($_SESSION['id']))
   {
   	header('location:login.php');
   }

  ?>

<?php include('header.php'); ?>
			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg bg-pink">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-light">add-products</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>add-products</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="#">
												<h6 class="txt-dark capitalize-font"><i class="icon-list mr-10"></i>about product</h6>
												<hr>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Product Name</label>
															<input type="text" id="Name" class="form-control" placeholder="Rounded Chair">
														</div>
													</div>
													<!--/span-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Category</label>
															<select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="category">
																<option value="Men">Men</option>
																<option value="Women">Women</option>
																<option value="Special Collection">Special Collection</option>
															</select>
														</div>
													</div>
													<!--/span-->
														<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Sub Category</label>
															<select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="category">
																<option value="Men">Men</option>
																<option value="Women">Women</option>
																<option value="Special Collection">Special Collection</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="text" class="form-control" id="exampleInputuname" placeholder="153">
															</div>
														</div>
													</div>

													
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Discount</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-cut"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="36%">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- Row -->
												<div class="row">
													
													<!--/span-->
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Quantity</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="	
ti-shopping-cart"></i></div>
																<input type="text" class="form-control" id="exampleInputuname" placeholder="153">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Status</label>
															<div class="radio-list">
																
																<select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="category">
																<option value="yes">yes</option>
																<option value="no">no</option>
																
															</select>
															</div>
														</div>
													</div>
													
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label mb-10">Description</label>
															<div class="input-group">
																
																<textarea name="description" rows="2" cols="60"></textarea>
															</div>
														</div>
													</div>


													<div class="col-md-12">
													<button type="button" class="btn btn-success" name="submit">submit</button>
												</div>
													<!--/span-->
												</div>
												<!--/row-->
												
												
												<!--/row-->
												
												
												
												
												
												
												
												
												
												
												
												
												
												
												
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

				</div>
				
				<!-- Footer -->
				
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
		
	</body>

<!-- Mirrored from hencework.com/theme/kenny/add-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jun 2019 05:02:12 GMT -->
</html>