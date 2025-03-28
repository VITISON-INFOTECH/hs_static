<?php
	session_start();
	
 
	if(isset($_REQUEST["amount"]))
	{
		$amount = $_REQUEST["amount"];
		//echo $amount;
	}
	if(isset($_REQUEST["firstname"]))
	{
		$firstname = $_REQUEST["firstname"];
		//echo $firstname;
	}
	if(isset($_REQUEST["email"]))
	{
		$email = $_REQUEST["email"];
		//echo $email;
	}
	if(isset($_REQUEST["phone"]))
	{
		$phone = $_REQUEST["phone"];
		//echo $phone;
	}
	if(isset($_REQUEST["productinfo"]))
	{
		$productinfo = $_REQUEST["productinfo"];
		//echo $productinfo;
	}
	
 	$user = array('name' => $firstname, 'email' => $email, 'mobile' => $phone, 'amount' => $amount);
 	$_SESSION = $user;
 	
// Merchant key here as provided by Payu

//$MERCHANT_KEY = "gtKFFx";
//$MERCHANT_KEY = "ggDpTq";
$MERCHANT_KEY = "7VLSz4F1";

// Merchant Salt as provided by Payu

//$SALT = "eCwWELxi";
//$SALT = "99ncIPlw";
$SALT = "KHBHbCkyB9";

//$MERCHANT_KEY = "ggDpTq";
// Merchant Salt as provided by Payu
//$SALT = "99ncIPlw";
// End point - change to https://secure.payu.in for LIVE mode
//$PAYU_BASE_URL = "https://test.payu.in";
//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';
$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}
$formError = 0;
if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) 
{
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
          || empty($posted['service_provider'])
		
  	) 
  	{
    	$formError = 1;
  	} 
  	else 
  	{
	    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
		$hashVarsSeq = explode('|', $hashSequence);
	    $hash_string = '';	
		foreach($hashVarsSeq as $hash_var) {
	      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
	      $hash_string .= '|';
	    }
	    $hash_string .= $SALT;
	    $hash = strtolower(hash('sha512', $hash_string));
	    $action = $PAYU_BASE_URL . '/_payment';
  	}
} 
elseif(!empty($posted['hash'])) 
{
  	$hash = $posted['hash'];
  	$action = $PAYU_BASE_URL . '/_payment';
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
		<!--meta name="description" content="YOUR META DESCRIPTION GOES HERE" />
		
		<!-- meta keywords -->
		<!--meta name="keywords" content="YOUR META KEYWORDS GOES HERE" />
		
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
		
			<link rel="shortcut icon" href="img/logo1.png">
			<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
		//alert("hi");
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
			
  
	</head>
	<!-- END head -->
	<!-- START body -->
	<body onload="submitPayuForm();">
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
									CONFIRM YOUR DETAILS AND MAKE A PAYMENT
								</a>
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
							 <?php if($formError) { ?>
	
							  <!-- <span style="color:red">Please fill all mandatory fields.</span> -->
							  <br/>
							  <br/>
							<?php } ?>
								<form action="<?php echo $action; ?>" method="post" name="payuForm">
								  <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
								  <input type="hidden" name="service_provider" value="payu_paisa" />
								  <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
								  <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
								 
								  <table width="50%" class="table-responsive" align = "center">
										<tr>
											<td width="25%"></td>
											<td width="5%"></td>
											<td width="20%"></td>
										</tr>
										
										<tr>
											<td><span style="color:black;">Amount</span></td>
											<td><span style="color:black;">:</span></td>
											<td><span style="color:black;">
											<input type = "hidden" name="amount" value="<?php echo $amount;?>" />
											<?php echo $amount;?></span></td>
										</tr>
										<tr>
											<td><span style="color:black;">Name</span></td>
											<td><span style="color:black;">:</span></td>
											<td><span style="color:black;">
											<input type = "hidden" name="firstname" id="firstname" value="<?php echo $firstname; ?>" /><?php echo $firstname; ?>
											</span></td>
										</tr>
										<tr>
											<td><span style="color:black;">Email</span></td>
											<td><span style="color:black;">:</span></td>
											<td><span style="color:black;">
											<input type= "hidden" name="email" id="email" value="<?php echo $email;?>" /><?php echo $email;?>
											</span></td>
										</tr>
										<tr>
											<td><span style="color:black;">Mobile</span></td>
											<td><span style="color:black;">:</span></td>
											<td><span style="color:black;">
											<input type= "hidden" name="phone" value="<?php echo $phone;?>" /><?php echo $phone;?>
											</span></td>
										</tr>
										<tr>
											
											<td><span style="color:black;">
											</span></td>
										</tr>
										
										<tr>
											
											<td><span style="color:black;">
											</span></td>
										</tr>
										<tr>
											
											<td><span style="color:black;">
											<input type= "hidden" name="productinfo" value = "<?php echo $productinfo;?>">
											</span></td>
										</tr>
										<tr>
										  <td></td>
										  <td colspan="3"><input type = "hidden" name="surl" value="http://hansujasolutions.com/payu/pay-success.php" size="64" /></td>
										</tr>
										<tr>
										  <td></td>
										  <td colspan="3"><input type = "hidden" name="furl" value="http://hansujasolutions.com/payu/pay-failure.php" size="64" /></td>
										</tr>
										<tr>
										  <?php if(!$hash) { ?>
											<td colspan="4">
												<input type="submit" value="Pay Now" class = "btn btn-success"/>
												
											</td>
										  <?php
										  }
										 	  
										  ?>
										</tr>
										
									</table>
								  
								</form>
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
		<!--script type="text/javascript" src="js/modernizr.custom.17475.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="bs3/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script src="js/styleswitcher.js"></script>
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->
		<!-- Analytics -->
		<!--script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-42761673-1', 'extracoding.com');
		  ga('send', 'pageview');
		</script-->
		</center>
	</body>
</html>