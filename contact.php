<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hostel website - Contact us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<!-- css --> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
	<link href="css/flexslider.css" rel="stylesheet" /> 
	<link href="css/style.css" rel="stylesheet" />
	<style>
		.whatsapp-btn-container {
			position: fixed;
    opacity: 0;
    bottom: -50px;
    padding: 24px;
    margin: -42px -8px;
    animation: fade-up 1000ms forwards;
    animation-delay: 1000ms;
}

@keyframes fade-up {
    100% {
        bottom: 24px;
        opacity: 1;
    }
}

.whatsapp-btn-container .whatsapp-btn {
    font-size: 48px;
    color: #25d366;
    display: inline-block;
    transition: all 400ms;
}

.whatsapp-btn-container .whatsapp-btn:hover {
    transform: scale(1.2);
}

.whatsapp-btn-container span {
	position: absolute;
    top: 0;
    left: 12px;
    font-family: "Roboto", sans-serif;
    font-weight: bold;
    color: #e91e63;
    transform: rotateZ(20deg) translateX(40px);
    opacity: 0;
    transition: all 400ms;
}

.whatsapp-btn-container .whatsapp-btn:hover + span {
    transform: rotateZ(0deg) translateX(0px);
    opacity: 1;
}
	</style>
</head>
<body>
		<!-- Whatsapp Logo -->
		<div class="whatsapp-btn-container">
        <a class="whatsapp-btn" href="https://wa.me/923234354739?text=Can you provide pin location to the hostel?"><i class="fab fa-whatsapp"></i></a>
        <span>Contact Us</span>
    </div>
	<div id="wrapper"> 

		<!-- start header -->
		<?php include('includes/header.php') ?>
		<!-- end header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle">Contact Us</h2>
					</div>
				</div>
			</div>
		</section>
		<section id="content">

			<div class="container">
				<div class="row"> 
					<div class="col-md-12">
						<div class="about-logo">
							<h3>Get<span class="color"> in Touch</span></h3>
							<p>Our dedicated team is here to assist you with any inquiries or feedback you may have. Whether you're a student seeking information about our hostel facilities or a partner interested in collaboration, we're eager to hear from you. </p>
							<p>Feel free to reach out using the contact details provided below, and we'll respond promptly. Your satisfaction is our priority, and we look forward to connecting with you.</p>
						</div>  
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p> </p>

						<!-- Form itself -->
						<form name="sentMessage" id="contactForm"  validate> 
							<div class="input-field"> 
								<input type="text" name="name" class="form-control" 
								id="name" required
								data-validation-required-message="Please enter your name" />
								<label for="name" class="">   Name </label> 
								<p class="help-block"></p>

							</div> 	
							<div class="input-field"> 
								<input type="email" class="form-control" id="email" required
								data-validation-required-message="Please enter your email" /> 
								<label for="name" class="">   Email </label> 
							</div> 	

							<div class="input-field"> 
								<textarea rows="10" cols="100" required class="form-control materialize-textarea" 
								idation-required-message="Please enter your message" minlength="5" 
								data-validation-minlength-message="Min 5 characters" 
								maxlength="999" style="resize:none"></textarea>
								<label for="name" class="">   Message </label> 
							</div> 		 
							<div id="success"> </div> <!-- For success/fail messages -->
							<button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Send</button><br />
						</form>
					</div>
				</div>
			</div>

		</section>
		<?php include('includes/footer.php') ?>
	</div>
	<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up HillSide"></i></a>
<!-- javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="materialize/js/materialize.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>  
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<!-- Vendor Scripts -->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/animate.js"></script> 
	<script src="js/custom.js"></script>

	<script src="contact/jqBootstrapValidation.js"></script>
	<script src="contact/contact_me.js"></script>
</body>
</html>