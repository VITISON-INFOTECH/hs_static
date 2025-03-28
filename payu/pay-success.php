<?php
session_start();
//	include("class/admin.php");
//	include("class/vehicle.php");
//	include("class/dbConnection.php");
	
	$status=$_POST["status"];
	$firstname=$_POST["firstname"];
	$amount=$_POST["amount"];
	$txnid=$_POST["txnid"];
	$posted_hash=$_POST["hash"];
	$key=$_POST["key"];
	$productinfo=$_POST["productinfo"];
	$email=$_POST["email"];
	//$salt="eCwWELxi";
	//$salt="99ncIPlw";
	$SALT = "KHBHbCkyB9";
	
	//$name = isset($_SESSION['name'])?$_SESSION['name']:"";
	//$email = isset($_SESSION['email'])?$_SESSION['email']:"";
	$mobile = isset($_SESSION['mobile'])?$_SESSION['mobile']:"";
	//$amount = isset($_SESSION['amount'])?$_SESSION['amount']:"";

	//$dbObject = new dbConnection();
	//$con = $dbObject->getConnection();
	//echo $con;
	

?>	
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<!-- START head -->
	<head>
		<!-- Site meta charset -->
		<meta charset="UTF-8">
		
		<!-- title -->
		<title> HANSUJA SOLUTIONS PAYMENT PAGE</title>
		
		<!-- meta description -->
		<meta name="description" content="YOUR META DESCRIPTION GOES HERE" />
		
		<!-- meta keywords -->
		<meta name="keywords" content="YOUR META KEYWORDS GOES HERE" />
		
		<!-- meta viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		
		<!-- favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.html" type="image/x-icon" />
		
		<!-- bootstrap 3 stylesheets -->
		<link rel="stylesheet" type="text/css" href="bs3/css/bootstrap.css" media="all" />
		<!-- template stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
		<!-- responsive stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
		<!-- Load Fonts via Google Fonts API -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Karla:400,700,400italic,700italic" />
		<!-- color scheme -->
		<link rel="stylesheet" type="text/css" href="css/colors/color1.css" title="color1" />
		<link rel="stylesheet" type="text/css" href="ui.css"/>
			<link rel="shortcut icon" href="img/logo1.png">
			
	</head>
	<!-- END head -->
	<!-- START body -->
	<body onload = "loadValues();">
	    <center>
		<!-- START #wrapper -->
		<div id="wrapper">
			<!-- START header -->
			<header>
				<!-- START #top-header -->
				<div id="top-header">
					<div class="container">
						<div class="row top-row">
							<div class="col-md-6">
								<div class="left-part alignleft">
								
					            <img src="logo4.png"/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="right-part alignright">
									
							    <img src="payulogo.jpg" width="300" height="100"/> 		
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END #top-header -->
				
				<!-- START #main-header -->
				<div id="main-header">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
		<a id="site-logo" href="http://hansujasolutions.com/payu/payAmount.php">
									<img src="" alt="HANSUJA SOLUTIONS PAYMENT PAGE" />
								</a>
							</div>
							<div class="col-md-9">
								
							</div>
						</div>
					</div>
				</div>
				<!-- END #main-header -->
			</header>
			<!-- END header -->
			
			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
						
						</div>
					</div>
				</div>
			</div>
			<!-- END #page-header -->
			
			<!-- START .main-contents -->
			<div class="main-contents">
				<div class="container">
					<div class="row">
						<!-- START #page -->
					  <div id="page" class="col-md-8">
							<!-- START .post-data -->
							
							<!-- END .post-data -->
							
							<!-- START .post-content -->
							<article class="post-content">
							<?php

									   
								  echo "<h3>Thank You. Your order status is ". $status .".</h3>";
								  echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
								  echo "<h4>We will update and get back to you . Your Payment details are Rs. " . $amount . ". </h4>";

							?>
							</article>
						  <!-- END .post-content -->
							
						  <!-- START .about-author -->
						  <!-- END .about-author -->
                          <!-- START #comments -->
                          <!-- END #comments -->
                          <!-- START #commentForm --><!-- END #commentForm -->
						</div>
						<!-- END #page -->
						
						<!-- START #sidebar -->
						<aside id="sidebar" class="col-md-4">
							<div class="sidebar-widget">
								<!-- Sidebar recent popular posts -->
								<!-- START TABS -->
							
								<!-- END TABS -->
								
										
								<!-- START TAB CONTENT -->
								<div class="tab-content gray box-shadow1 clearfix marb30">
									<!-- START TAB 1 -->
									<div class="tab-pane active" id="popular-posts">
									
									</div>
									<!-- END TAB 1 -->
									
									<!-- START TAB 2 -->
									<div class="tab-pane" id="recent-posts">
										
									</div>
									<!-- END TAB 2 -->
									
									
								</div>
								<!-- END TAB CONTENT -->
							</div>
							
							<div class="sidebar-widget">
								<!-- Sidebar facebook widget -->
								<!-- START TABS -->
							
								<!-- END TABS -->
								
							
						
							
					  
						<!-- END #sidebar -->
					</div>
					<!-- END .row -->
				</div>
			</div>
			<!-- END .main-contents -->
			
						<!-- START footer -->
			<footer>
				<!-- START #ft-footer -->
				
				<!-- END #ft-footer -->
				
				<!-- START #ex-footer -->
				<div id="#ex-footer">
					<div class="container">
						<div class="row">
							<nav class="col-md-12">
							
							</nav>
							
							<div class="foot-boxs">
								<div class="foot-box col-md-4 text-right">
								
									
								</div>
								<div class="foot-box foot-box-md col-md-4">
								
								</div>
								<div class="foot-box col-md-4">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END #ex-footer -->
			</footer>
			<!-- END footer -->
		</div>
		<!-- END #wrapper -->
		
		<!-- javascripts -->
		<script type="text/javascript" src="js/modernizr.custom.17475.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="bs3/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script src="js/styleswitcher.js"></script>
		
		<script src="jquery.js"></script>
		<script src="bootstrap.min.js"></script>
		<script src="jquery-ui-1.9.2.custom.min.js"></script>
		
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->
		<!-- Analytics -->
		</center>
	</body>
</html>