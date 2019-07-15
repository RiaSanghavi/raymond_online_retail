
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


<?php
$conn=mysqli_connect("localhost","root","","raymond");

if(isset($_POST['submit'])){
  $category=$_POST['category'];
  $subcategory=$_POST['subcategory'];
  

$sql=mysqli_query($conn, "insert into subcategory(category,subcategory) values('$category','$subcategory')"); 

if ($sql) {
  echo "<script>alert('success')</script>";
}
else{
  echo "<script>alert('failed')</script>";
}




}
?>
<?php include('header.php'); ?>
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg bg-yellow">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-light">Subcategory</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>ui-elements</span></a></li>
							<li class="active"><span>modals</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
						<div class="col-md-3">
							<div class="">
								
								<div  class="panel-wrapper collapse in">
									<div  class="panel-body">
										
										<div class="button-list mt-25">
											<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add sub category</button>
											
											
										</div>
										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h5 class="modal-title" id="exampleModalLabel1">New message</h5>
													</div>
													<div class="modal-body">
														<form method="post">
															<div class="form-group">
																<label for="recipient-name" class="control-label mb-10">Category:</label>
																<select class="form-control" name="category">
																	<option value="Men">Men</option>
																	<option value="Women">Women</option>
																	<option value="Special Collection">Special Collection</option>
																</select>
																	
															</div>
															<div class="form-group">
																<label for="message-text" class="control-label mb-10">Sub category:</label><br>
																<input type="text" name="subcategory" style="width:550px;height:40px;">
															</div>
														
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<input type="submit" class="btn btn-primary" name="submit" value="submit">
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
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
														<th>Category</th>
														<th>Sub Category</th>
														<th>Delete</th>
													</tr>
												</thead>
												
						<?php
						$conn=mysqli_connect("localhost","root","","raymond");
						$sql=mysqli_query($conn,"select * from subcategory");
						
												while($row=mysqli_fetch_array($sql))
 												 {
    											echo'
												<tr>
													<td>'.$row['id'].'</td>
													<td>'.$row['category'].'</td>
													<td>'.$row['subcategory'].'</td>
													 <td><a href="delete.php?delete='.$row['id'].'">delete</a></td>
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