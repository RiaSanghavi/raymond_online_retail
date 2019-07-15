
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
<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg bg-yellow">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-light">Users</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>ui-elements</span></a></li>
							<li class="active"><span>modals</span></li>
						  </ol>
						</div>



												<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">data Table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>ID</th>
														<th>USER ID</th>
														<th>Pid</th>
														<th>product name</th>
														<th>price</th>
														<th>quantity</th>
														<th>size</th>
													</tr>
												</thead>
												
						<?php
						$conn=mysqli_connect("localhost","root","","raymond");
						$sql=mysqli_query($conn,"select * from cart");
						
												while($row=mysqli_fetch_array($sql))
 												 {
    											echo'
												<tr>
													<td>'.$row['id'].'</td>
													<td>'.$row['user_id'].'</td>
													<td>'.$row['pid'].'</td>
													<td>'.$row['pname'].'</td>
													<td>'.$row['price'].'</td>
													<td>'.$row['quantity'].'</td>
													<td>'.$row['size'].'</td>

													</tr>';
													
												}
													?>
													
												</table>
													<!-- Footer -->
				
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
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