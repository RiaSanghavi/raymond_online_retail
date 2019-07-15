
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from hencework.com/theme/kenny/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jun 2019 05:03:14 GMT -->
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Kenny I Fast build Admin dashboard for any platform</title>
		<meta name="description" content="Kenny is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Kenny Admin, kennyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="../vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
		 <?php
		 session_start();
                         
                                $conn=mysqli_connect("localhost","root","","raymond");
                                if(isset($_POST['submit']))
                                {
                                    $email=$_POST['email'];
                                    $pass=$_POST['pass'];

                                     $verify_email="select * from admin where user_id='$email'";
                                       $result=mysqli_query($conn,$verify_email);
                                     $verify_email_pass=mysqli_query($conn,"select * from admin where user_id='$email' and password='$pass'");
                                    
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
                                        $sql=mysqli_query($conn,"select * from admin where user_id='$email' and password='$pass'");
                                        if($sql)
                                        { 
                                            // $name1=$row['name'];

                                            $_SESSION['id']=$row['user_id'];
                                            // $_SESSION['username']=$name1;
                                           
                                            echo" <script>alert('welcome to admin dashboard'),
                                             window.location.href='e-commerce.php'</script>";
                                            

                                    }
                                }

                                }
                                ?>
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="panel panel-default card-view mb-0">
									<div class="panel-heading">
										<div class="pull-left">
											<h6 class="panel-title txt-dark">Sign In</h6>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body">
											<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-wrap">
														<form method="post" action="login.php">
															<div class="form-group">
																
																<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
																<div class="input-group">
																	<input type="email" class="form-control" required="" id="exampleInputEmail_2" name="email" placeholder="Enter email">
																	<div class="input-group-addon"><i class="icon-envelope-open"></i></div>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label mb-10" for="exampleInputpwd_2">Password</label>
																<div class="input-group">
																	<input type="password" class="form-control" required="" name="pass" id="exampleInputpwd_2" placeholder="Enter pwd">
																	<div class="input-group-addon"><i class="icon-lock"></i></div>
																</div>
															</div>
															
														
																<a class="capitalize-font txt-danger block pt-5 pull-right" href="#">forgot password</a>
																<div class="clearfix"></div>
															</div>
															<div class="form-group">
																<button type="submit" name="submit" class="btn btn-success btn-block">sign in</button>
															</div>
															
														</form>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>

<!-- Mirrored from hencework.com/theme/kenny/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jun 2019 05:03:14 GMT -->
</html>
