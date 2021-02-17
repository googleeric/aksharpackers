<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<!-- Mirrored from demoxml.com/html/maxmovers/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 20:36:58 GMT -->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Movers - Contact Us</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-72x72-precomposed.html">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
	
	<link rel="stylesheet" type="text/css" href="assets/revolution/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/revolution/fonts/font-awesome/css/font-awesome.min.css">
	
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link href="assets/css/lib.css" rel="stylesheet">
	
	<!-- Custom - Common CSS -->
	<link href="assets/css/plugins.css" rel="stylesheet">
	<link href="assets/css/elements.css" rel="stylesheet">
	<link href="assets/css/rtl.css" rel="stylesheet">
	
	<!-- Custom - Theme CSS -->
	
	<link rel="stylesheet" type="text/css" href="style.css">
	
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<div class="main-container">
		<!-- Loader -->
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div><!-- Loader /- -->

		<?php
			include('./header/header.php');
		?>

		<main>
			<!-- Page Banner -->
			<div class="page-banner container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="page-banner-content">
						<h3>Contact Us</h3>
						<ol class="breadcrumb">
							<li><a href="index-2.html">Home</a></li>
							<li class="active">Contact Us</li>
						</ol>
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Banner -->
			
			<!-- Contact Us -->
			<div class="contact-us container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<div class="contact-address-box">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="address-info">
								<p>
									<i class="icon icon-Pointer"></i>
									<span>Email</span>
									<a href="mailto:info@maxhosting.com">info@aksharpackers.com</a>
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="address-info">
								<p>
									<i class="icon icon-Phone2"></i>
									<span>Call us</span>
									<a href="tel:183600856478" title="1836 0085 6478">1836 0085 6478</a>
								</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="address-info">
								<p>
									<i class="icon icon-Time"></i>
									<span>working hours</span>
									<a href="#" title="Time">Mon to Fri : 9am to 5pm</a>
								</p>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Contact Us /- -->
			
			
			<div class="contact-form container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h5>contact us</h5>
						<h3>Feel Free To Say <span>Hell0!</span></h3>
					</div><!-- Section Header /- -->
					<form class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 form-group">
							<input type="text" class="form-control" placeholder="Name" name="contact-name" id="input_name" required="" />
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 form-group">
							<input type="text" class="form-control" placeholder="Email" name="contact-email" id="input_email" required="" />
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 form-group">
							<input type="text" class="form-control" placeholder="Subject" name="contact-subject" id="input_subject" />
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 form-group">
							<textarea class="form-control" placeholder="Your Message" name="textarea-message" id="textarea_message"></textarea>
						</div>
						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<button title="Submit Now" type="submit" id="btn_submit" name="post">Submit Now</button>
						</div>
						<div id="alert-msg" class="alert-msg"></div>
					</form>
				</div><!-- Container /- -->
			</div>
		</main>
		
		<!-- Footer Main -->
		<?php
			include('./footer/footer.php');
		?>


	</div>
	
	<!-- JQuery v1.12.4 -->
	<script src="assets/js/jquery.min.js"></script>

	<!-- Library - Js -->
	<script src="assets/js/lib.js"></script>
	
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
	<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
	
	<!-- Library - Theme JS -->
	<script src="assets/js/functions.js"></script>
	
</body>

<!-- Mirrored from demoxml.com/html/maxmovers/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 20:36:58 GMT -->
</html>
