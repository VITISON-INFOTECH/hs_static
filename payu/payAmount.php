<?php
		
	//Declaring Variables
	$success = "";
	$failure = "";
	$capacity = "";
	$message="";
	$recordSet;
	$dateOfCreation;
	$dateOfModification;
	
	$NA = "<font color = 'red'>Not Available</font>";
	
	//Retrieving Query String Variable
	if(isset($_REQUEST["success"]))
	{
		$success = $_REQUEST["success"];
	}
	
	if(isset($_REQUEST["failure"]))
	{
		$failure = $_REQUEST["failure"];
	}

	
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
			
			<script type = "text/javaScript">
			function loadPersonsAndPackages(vehId)
			{
				//alert("vehId:"+vehId);			
				//Declaring Variable
				
				var xmlHttpObj;			
				if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari	
					xmlHttpObj = new XMLHttpRequest();	
				}				
				else		
				{// code for IE6, IE5	
					xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
				}	
				//Receiving HTTP Response
				xmlHttpObj.onreadystatechange=function()
				{
					if((xmlHttpObj.readyState == 4) && (xmlHttpObj.status == 200))
					{
						document.getElementById("divBill").innerHTML = xmlHttpObj.responseText;
					}		
				}				
				//Sending HTTP Request
				var path = "subLinks/getVehicleCapacity.php?vehId="+vehId;
				//alert(path);
				xmlHttpObj.open("GET",path,true);
				xmlHttpObj.send();	
				//document.getElementById("divBill2").style.display = "none";
			}
		</script>
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
							
							</div>
							<div class="col-md-9">
								<nav class="main-nav">
								
									
								</nav>
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
							<div class="row mt">
								
								
								
								
								
								<div class="col-lg-12">
								<h4 style = "color:red;" id = "errorMessage"></h4>
								<div class = "panel panel-primary">
									<div class="panel-heading">Make a Payment</b></div>
										<div class = "panel-body">
											<form class = "form-horizontal style-form" action="booking2.php" method="post">
											<!--h2><b></b></h2-->
										<div class="form-group"><label class="col-sm-3 col-sm-3 control-label">Name<span style="color:red">*</span></label><div class="col-sm-9">
												  <input type = "text" class = "form-control" name="firstname" id="firstname" required /></div></div>
												  <!--<input type = "hidden" name="email" id="email" value="rpstravels@gmail.com" />-->
												  <div class="form-group"><label class="col-sm-3 col-sm-3 control-label">Email<span style="color:red">*</span></label><div class="col-sm-9"><input type = "text" class = "form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/></div></div>
												  <!--<input type = "hidden" name="phone" id="phone" value="9431023311" />-->
												  <div class="form-group"><label class="col-sm-3 col-sm-3 control-label">Mobile No<span style="color:red">*</span></label><div class="col-sm-9"><input type = "text" class = "form-control" name="phone" id="phone" pattern="[0-9]{10}" required />
												  <input type = "hidden" name="productinfo" id="productinfo" value="vehicle" /></div></div>	  
												 
												  <div class="form-group">
													  <label class="col-sm-3 col-sm-3 control-label">Amount<span style="color:red">*</span></label>
													  <div class="col-sm-9">
														 <input name="amount" id="amount" class = "form-control" required="" />
													  </div>
												  </div>
												  

												  <div>
													<input type="submit" class="btn btn-primary col-md-offset-3" >
												  </div>

											</form>
										</div>
									</div>
								</div>
							</div>
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
									
									<!-- END TAB 1 -->
									
									<!-- START TAB 2 -->
									
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
		
		<script type = "text/javaScript" src="customerForm.js"></script>
		
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->

		<!-- Analytics -->
		 <script>
	function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
			
  </script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-42761673-1', 'extracoding.com');
	  ga('send', 'pageview');
	</script>
	<script>
	/*$.datepicker.setDefaults({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd/mm/yy'});
    $('#datepicker').datepicker({
        minDate: '+0',
        onSelect: function(dateStr) {
            var min = $(this).datepicker('getDate') || new Date(); // Selected date or today if none
            var max = new Date(min.getTime());
            max.setMonth(max.getMonth() + 1); // Add one month
            $('#datepicker').datepicker('option', {minDate: min, maxDate: max});
        }
    });
    $('#datepicker').datepicker({
        minDate: '+0',
        maxDate: '+3m',
        onSelect: function(dateStr) {
            var max = $(this).datepicker('getDate'); // Selected date or null if none
            $('#datepicker').datepicker('option', {maxDate: max});
        }
    });*/
	 $.datepicker.setDefaults({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd/mm/yy'});
    $('#date_depart').datepicker({
        minDate: '+0',
        onSelect: function(dateStr) {
            var min = $(this).datepicker('getDate') || new Date(); // Selected date or today if none
            var max = new Date(min.getTime());
            max.setMonth(max.getMonth() + 1); // Add one month
            $('#date_retour').datepicker('option', {minDate: min, maxDate: max});
        }
    });
    $('#date_retour').datepicker({
        minDate: '+0',
        maxDate: '+1m',
        onSelect: function(dateStr) {
            var max = $(this).datepicker('getDate'); // Selected date or null if none
            $('#date_depart').datepicker('option', {maxDate: max});
        }
    });
  </script>
 </center> 
	</body>
</html>