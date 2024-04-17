<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Hostel website - Home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<!-- css -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
	<link href="css/style.css" rel="stylesheet" />
	<style>
		@import url(//cdn.rawgit.com/rtaibah/dubai-font-cdn/master/dubai-font.css);


		*,
		*:after,
		*:before {
			margin: 0;
			padding: 0;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-ms-box-sizing: border-box;
			-o-box-sizing: border-box;
			box-sizing: border-box;
			-webkit-user-select: none;
			-ms-user-select: none;
			-o-user-select: none;
			-moz-user-select: none;
			user-select: none;
			cursor: default;
		}

		html {
			width: 100%;
			height: auto;
		}

		body {
			width: 100%;
			height: auto;
			font-size: 16px;
			font-family: Dubai-Light;
			background: rgba(30, 30, 30);
		}

		.testim {
			color: #1e1e1e;
			background-color: #1e1e1e;
			padding: 60px 0;
			background: #1b1b1b;
			background-size: 400% 400%;
			background: linear-gradient(to right bottom, #2a1f30 50%, #383d44 50%);
		}

		.testim .wrap {
			position: relative;
			width: 100%;
			max-width: 1020px;
			padding: 40px 20px;
			margin: auto;
		}

		.testim .arrow {
			display: block;
			position: absolute;
			color: #eee;
			cursor: pointer;
			font-size: 2em;
			top: 50%;
			-webkit-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			-moz-transform: translateY(-50%);
			-o-transform: translateY(-50%);
			transform: translateY(-50%);
			-webkit-transition: all .3s ease-in-out;
			-ms-transition: all .3s ease-in-out;
			-moz-transition: all .3s ease-in-out;
			-o-transition: all .3s ease-in-out;
			transition: all .3s ease-in-out;
			padding: 5px;
			z-index: 22222222;
		}

		.testim .arrow:before {
			cursor: pointer;
		}

		.testim .arrow:hover {
			color: #ea830e;
		}


		.testim .arrow.left {
			left: 10px;
		}

		.testim .arrow.right {
			right: 10px;
		}

		.testim .dots {
			text-align: center;
			position: absolute;
			width: 100%;
			bottom: 60px;
			left: 0;
			display: block;
			z-index: 3333;
			height: 12px;
		}

		.testim .dots .dot {
			list-style-type: none;
			display: inline-block;
			width: 12px;
			height: 12px;
			border-radius: 50%;
			border: 1px solid #eee;
			margin: 0 10px;
			cursor: pointer;
			-webkit-transition: all .5s ease-in-out;
			-ms-transition: all .5s ease-in-out;
			-moz-transition: all .5s ease-in-out;
			-o-transition: all .5s ease-in-out;
			transition: all .5s ease-in-out;
			position: relative;
		}

		.testim .dots .dot.active,
		.testim .dots .dot:hover {
			background: #ea830e;
			border-color: #ea830e;
		}

		.testim .dots .dot.active {
			-webkit-animation: testim-scale .5s ease-in-out forwards;
			-moz-animation: testim-scale .5s ease-in-out forwards;
			-ms-animation: testim-scale .5s ease-in-out forwards;
			-o-animation: testim-scale .5s ease-in-out forwards;
			animation: testim-scale .5s ease-in-out forwards;
		}

		.testim .cont {
			position: relative;
			overflow: hidden;
		}

		.testim .cont>div {
			text-align: center;
			position: absolute;
			top: 0;
			left: 0;
			padding: 0 0 70px 0;
			opacity: 0;
		}

		.testim .cont>div.inactive {
			opacity: 1;
		}


		.testim .cont>div.active {
			position: relative;
			opacity: 1;
		}


		.testim .cont div .img img {
			display: block;
			width: 100px;
			height: 100px;
			margin: auto;
			border-radius: 50%;
		}

		.testim .cont div h2 {
			color: #ea830e;
			font-size: 1em;
			margin: 15px 0;
		}

		.testim .cont div p {
			font-size: 1.15em;
			color: #eee;
			width: 80%;
			margin: auto;
		}

		.testim .cont div.active .img img {
			-webkit-animation: testim-show .5s ease-in-out forwards;
			-moz-animation: testim-show .5s ease-in-out forwards;
			-ms-animation: testim-show .5s ease-in-out forwards;
			-o-animation: testim-show .5s ease-in-out forwards;
			animation: testim-show .5s ease-in-out forwards;
		}

		.testim .cont div.active h2 {
			-webkit-animation: testim-content-in .4s ease-in-out forwards;
			-moz-animation: testim-content-in .4s ease-in-out forwards;
			-ms-animation: testim-content-in .4s ease-in-out forwards;
			-o-animation: testim-content-in .4s ease-in-out forwards;
			animation: testim-content-in .4s ease-in-out forwards;
		}

		.testim .cont div.active p {
			-webkit-animation: testim-content-in .5s ease-in-out forwards;
			-moz-animation: testim-content-in .5s ease-in-out forwards;
			-ms-animation: testim-content-in .5s ease-in-out forwards;
			-o-animation: testim-content-in .5s ease-in-out forwards;
			animation: testim-content-in .5s ease-in-out forwards;
		}

		.testim .cont div.inactive .img img {
			-webkit-animation: testim-hide .5s ease-in-out forwards;
			-moz-animation: testim-hide .5s ease-in-out forwards;
			-ms-animation: testim-hide .5s ease-in-out forwards;
			-o-animation: testim-hide .5s ease-in-out forwards;
			animation: testim-hide .5s ease-in-out forwards;
		}

		.testim .cont div.inactive h2 {
			-webkit-animation: testim-content-out .4s ease-in-out forwards;
			-moz-animation: testim-content-out .4s ease-in-out forwards;
			-ms-animation: testim-content-out .4s ease-in-out forwards;
			-o-animation: testim-content-out .4s ease-in-out forwards;
			animation: testim-content-out .4s ease-in-out forwards;
		}

		.testim .cont div.inactive p {
			-webkit-animation: testim-content-out .5s ease-in-out forwards;
			-moz-animation: testim-content-out .5s ease-in-out forwards;
			-ms-animation: testim-content-out .5s ease-in-out forwards;
			-o-animation: testim-content-out .5s ease-in-out forwards;
			animation: testim-content-out .5s ease-in-out forwards;
		}

		@-webkit-keyframes testim-scale {
			0% {
				-webkit-box-shadow: 0px 0px 0px 0px #eee;
				box-shadow: 0px 0px 0px 0px #eee;
			}

			35% {
				-webkit-box-shadow: 0px 0px 10px 5px #eee;
				box-shadow: 0px 0px 10px 5px #eee;
			}

			70% {
				-webkit-box-shadow: 0px 0px 10px 5px #ea830e;
				box-shadow: 0px 0px 10px 5px #ea830e;
			}

			100% {
				-webkit-box-shadow: 0px 0px 0px 0px #ea830e;
				box-shadow: 0px 0px 0px 0px #ea830e;
			}
		}

		@-moz-keyframes testim-scale {
			0% {
				-moz-box-shadow: 0px 0px 0px 0px #eee;
				box-shadow: 0px 0px 0px 0px #eee;
			}

			35% {
				-moz-box-shadow: 0px 0px 10px 5px #eee;
				box-shadow: 0px 0px 10px 5px #eee;
			}

			70% {
				-moz-box-shadow: 0px 0px 10px 5px #ea830e;
				box-shadow: 0px 0px 10px 5px #ea830e;
			}

			100% {
				-moz-box-shadow: 0px 0px 0px 0px #ea830e;
				box-shadow: 0px 0px 0px 0px #ea830e;
			}
		}

		@-ms-keyframes testim-scale {
			0% {
				-ms-box-shadow: 0px 0px 0px 0px #eee;
				box-shadow: 0px 0px 0px 0px #eee;
			}

			35% {
				-ms-box-shadow: 0px 0px 10px 5px #eee;
				box-shadow: 0px 0px 10px 5px #eee;
			}

			70% {
				-ms-box-shadow: 0px 0px 10px 5px #ea830e;
				box-shadow: 0px 0px 10px 5px #ea830e;
			}

			100% {
				-ms-box-shadow: 0px 0px 0px 0px #ea830e;
				box-shadow: 0px 0px 0px 0px #ea830e;
			}
		}

		@-o-keyframes testim-scale {
			0% {
				-o-box-shadow: 0px 0px 0px 0px #eee;
				box-shadow: 0px 0px 0px 0px #eee;
			}

			35% {
				-o-box-shadow: 0px 0px 10px 5px #eee;
				box-shadow: 0px 0px 10px 5px #eee;
			}

			70% {
				-o-box-shadow: 0px 0px 10px 5px #ea830e;
				box-shadow: 0px 0px 10px 5px #ea830e;
			}

			100% {
				-o-box-shadow: 0px 0px 0px 0px #ea830e;
				box-shadow: 0px 0px 0px 0px #ea830e;
			}
		}

		@keyframes testim-scale {
			0% {
				box-shadow: 0px 0px 0px 0px #eee;
			}

			35% {
				box-shadow: 0px 0px 10px 5px #eee;
			}

			70% {
				box-shadow: 0px 0px 10px 5px #ea830e;
			}

			100% {
				box-shadow: 0px 0px 0px 0px #ea830e;
			}
		}

		@-webkit-keyframes testim-content-in {
			from {
				opacity: 0;
				-webkit-transform: translateY(100%);
				transform: translateY(100%);
			}

			to {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@-moz-keyframes testim-content-in {
			from {
				opacity: 0;
				-moz-transform: translateY(100%);
				transform: translateY(100%);
			}

			to {
				opacity: 1;
				-moz-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@-ms-keyframes testim-content-in {
			from {
				opacity: 0;
				-ms-transform: translateY(100%);
				transform: translateY(100%);
			}

			to {
				opacity: 1;
				-ms-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@-o-keyframes testim-content-in {
			from {
				opacity: 0;
				-o-transform: translateY(100%);
				transform: translateY(100%);
			}

			to {
				opacity: 1;
				-o-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@keyframes testim-content-in {
			from {
				opacity: 0;
				transform: translateY(100%);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@-webkit-keyframes testim-content-out {
			from {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}

			to {
				opacity: 0;
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%);
			}
		}

		@-moz-keyframes testim-content-out {
			from {
				opacity: 1;
				-moz-transform: translateY(0);
				transform: translateY(0);
			}

			to {
				opacity: 0;
				-moz-transform: translateY(-100%);
				transform: translateY(-100%);
			}
		}

		@-ms-keyframes testim-content-out {
			from {
				opacity: 1;
				-ms-transform: translateY(0);
				transform: translateY(0);
			}

			to {
				opacity: 0;
				-ms-transform: translateY(-100%);
				transform: translateY(-100%);
			}
		}

		@-o-keyframes testim-content-out {
			from {
				opacity: 1;
				-o-transform: translateY(0);
				transform: translateY(0);
			}

			to {
				opacity: 0;
				transform: translateY(-100%);
				transform: translateY(-100%);
			}
		}

		@keyframes testim-content-out {
			from {
				opacity: 1;
				transform: translateY(0);
			}

			to {
				opacity: 0;
				transform: translateY(-100%);
			}
		}

		@-webkit-keyframes testim-show {
			from {
				opacity: 0;
				-webkit-transform: scale(0);
				transform: scale(0);
			}

			to {
				opacity: 1;
				-webkit-transform: scale(1);
				transform: scale(1);
			}
		}

		@-moz-keyframes testim-show {
			from {
				opacity: 0;
				-moz-transform: scale(0);
				transform: scale(0);
			}

			to {
				opacity: 1;
				-moz-transform: scale(1);
				transform: scale(1);
			}
		}

		@-ms-keyframes testim-show {
			from {
				opacity: 0;
				-ms-transform: scale(0);
				transform: scale(0);
			}

			to {
				opacity: 1;
				-ms-transform: scale(1);
				transform: scale(1);
			}
		}

		@-o-keyframes testim-show {
			from {
				opacity: 0;
				-o-transform: scale(0);
				transform: scale(0);
			}

			to {
				opacity: 1;
				-o-transform: scale(1);
				transform: scale(1);
			}
		}

		@keyframes testim-show {
			from {
				opacity: 0;
				transform: scale(0);
			}

			to {
				opacity: 1;
				transform: scale(1);
			}
		}

		@-webkit-keyframes testim-hide {
			from {
				opacity: 1;
				-webkit-transform: scale(1);
				transform: scale(1);
			}

			to {
				opacity: 0;
				-webkit-transform: scale(0);
				transform: scale(0);
			}
		}

		@-moz-keyframes testim-hide {
			from {
				opacity: 1;
				-moz-transform: scale(1);
				transform: scale(1);
			}

			to {
				opacity: 0;
				-moz-transform: scale(0);
				transform: scale(0);
			}
		}

		@-ms-keyframes testim-hide {
			from {
				opacity: 1;
				-ms-transform: scale(1);
				transform: scale(1);
			}

			to {
				opacity: 0;
				-ms-transform: scale(0);
				transform: scale(0);
			}
		}

		@-o-keyframes testim-hide {
			from {
				opacity: 1;
				-o-transform: scale(1);
				transform: scale(1);
			}

			to {
				opacity: 0;
				-o-transform: scale(0);
				transform: scale(0);
			}
		}

		@keyframes testim-hide {
			from {
				opacity: 1;
				transform: scale(1);
			}

			to {
				opacity: 0;
				transform: scale(0);
			}
		}

		@media all and (max-width: 300px) {
			body {
				font-size: 14px;
			}
		}

		@media all and (max-width: 500px) {
			.testim .arrow {
				font-size: 1.5em;
			}

			.testim .cont div p {
				line-height: 25px;
			}

		}

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
			left: 10px;
			font-family: "Roboto", sans-serif;
			font-weight: bold;
			color: #e91e63;
			transform: rotateZ(20deg) translateX(40px);
			opacity: 0;
			transition: all 400ms;
		}

		.whatsapp-btn-container .whatsapp-btn:hover+span {
			transform: rotateZ(0deg) translateX(0px);
			opacity: 1;
		}
	</style>
</head>

<body>
	<div id="wrapper" class="home-page">

		<!-- start header -->
		<?php include('includes/header.php') ?>
		<!-- end header -->
		<section id="banner">
			<!-- Slider -->
			<div id="slider" data-zs-src='["img/photos/lums-1.jpg", "img/photos/lums 2.jpg", "img/photos/Hostel.jpg"]'>
			</div>
			<!-- end slider -->
		</section>
		<section class="projects">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="aligncenter">
							<h2 class="aligncenter" style="
    color: #e91e63 !important;
">Our Featured Hostel Rooms</h2>At our hostel, we take pride in offering you the best accommodation experience during your stay. Our featured hostel rooms are designed to provide comfort, convenience, and a memorable stay for every guest. <br />Whether you're traveling solo, with friends, or as a group, we have the perfect room to suit your needs.
						</div>
						<br />
					</div>
				</div>

				<div class="row service-v1 margin-bottom-40">
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/room 1.jpg" alt="">
							</div>
							<div class="card-content">
								<p>
								<h4>Room 1</h4>
								<h5>Lahore</h5>
								<a href="hosteluser" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/bg_9.jpg" alt="">
							</div>
							<div class="card-content">
								<p>
								<h4>Room 2</h4>
								<h5>Lahore</h5>
								<a href="hosteluser" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
							<div class="card-image">
								<img class="img-responsive" src="img/room 3.jfif" alt="">
							</div>
							<div class="card-content">
								<p>
								<h4>Room 3</h4>
								<h5>Lahore</h5>
								<a href="hosteluser" class="btn btn-details">Book</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Whatsapp Logo -->
		<div class="whatsapp-btn-container">
			<a class="whatsapp-btn" href="https://wa.me/923234354739?text=Can you provide pin location to the hostel?"><i class="fab fa-whatsapp"></i></a>
			<span>Contact Us</span>
		</div>
		<section class="section-padding gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2 style="
    color: #e91e63 !important;
">Our Students</h2>
							<p style="
    color: black;
    font-size: larger;
">"Your Home Away from Home: Welcome to Our Hostel Management System"<br>The Future of Hostel Living: Introducing Our Management System for Students</p>
						</div>
					</div>

				</div>
				<div class="row">

					<div class="col-md-6 col-sm-6">
						<div class="about-image">
							<img src="img/bg_6.jpg" alt="About Images">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="about-text">
							<h3 style="
    color: #e91e63 !important;
">About Us</h3>
							<p style="
    color: black;
    font-size: larger;
">We are passionate about transforming hostel living into an unparalleled experience. Our journey began with a simple yet powerful vision to revolutionize the way hostels are managed and to provide students with a safe, comfortable, and supportive environment that truly feels like home. As a dedicated team of hostel management experts.</p>
							<p style="
    color: black;
    font-size: larger;
">Feel free to customize this paragraph by adding specific details about your company, such as its founding year, unique features of your hostel management system, or any remarkable achievements you've accomplished. Remember to maintain a friendly and approachable tone to connect with your audience effectively.</p>
							<a href="about.php" class="btn btn-primary waves-effect waves-dark">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="testim" class="testim">
			<!--         <div class="testim-cover"> -->
			<div class="section-title text-center">
				<h2 style="
    color: #e91e63 !important;
">Our Trusted Clients</h2>
			</div>

			<div class="wrap">

				<span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
				<span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
				<ul id="testim-dots" class="dots">
					<li class="dot active"></li><!--
                    -->
					<li class="dot"></li><!--
                    -->
					<li class="dot"></li><!--
                    -->
					<li class="dot"></li><!--
                    -->
					<li class="dot"></li>
				</ul>
				<div id="testim-content" class="cont">

					<div class="active">
						<div class="img"><img src="img/images1.png" alt=""></div>
						<h2>Ali</h2>
						<p>"I had an amazing stay at this hostel! The management system was top-notch, making the check-in and check-out process a breeze.</p>
					</div>

					<div>
						<div class="img"><img src="img/images5.png" alt=""></div>
						<h2>Asad</h2>
						<p>The staff was friendly and accommodating, and the featured hostel rooms were clean and comfortable.I highly recommend this hostel to anyone looking for a great experience!"</p>
					</div>

					<div>
						<div class="img"><img src="img/images3.png" alt=""></div>
						<h2>Muzamil</h2>
						<p>"My friends and I had an awesome time at this hostel! The management system was super easy to use, and we had no issues with our online booking."</p>
					</div>

					<div>
						<div class="img"><img src="img/images4.png" alt=""></div>
						<h2>Omar</h2>
						<p>"Perfect stay! Private ensuite room, helpful staff, and vibrant common areas. Can't wait to return!" I highly recommend</p>
					</div>

					<div>
						<div class="img"><img src="img/images2.png" alt=""></div>
						<h2>Husnain</h2>
						<p> I did encounter a small hiccup with the availability of a room once, but the customer support was quick to assist me and find an alternative. Overall, I highly recommend this website to fellow students.</p>
					</div>

				</div>

			</div>
			<!--         </div> -->
		</section>


		<script src="https://use.fontawesome.com/1744f3f671.js"></script>



		<?php include('includes/footer.php') ?>
	</div>
	<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up HillSide"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="materialize/js/materialize.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<!-- Vendor Scripts -->
	<script>
		// vars
		'use strict'
		var testim = document.getElementById("testim"),
			testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
			testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
			testimLeftArrow = document.getElementById("left-arrow"),
			testimRightArrow = document.getElementById("right-arrow"),
			testimSpeed = 4500,
			currentSlide = 0,
			currentActive = 0,
			testimTimer,
			touchStartPos,
			touchEndPos,
			touchPosDiff,
			ignoreTouch = 30;;

		window.onload = function() {

			// Testim Script
			function playSlide(slide) {
				for (var k = 0; k < testimDots.length; k++) {
					testimContent[k].classList.remove("active");
					testimContent[k].classList.remove("inactive");
					testimDots[k].classList.remove("active");
				}

				if (slide < 0) {
					slide = currentSlide = testimContent.length - 1;
				}

				if (slide > testimContent.length - 1) {
					slide = currentSlide = 0;
				}

				if (currentActive != currentSlide) {
					testimContent[currentActive].classList.add("inactive");
				}
				testimContent[slide].classList.add("active");
				testimDots[slide].classList.add("active");

				currentActive = currentSlide;

				clearTimeout(testimTimer);
				testimTimer = setTimeout(function() {
					playSlide(currentSlide += 1);
				}, testimSpeed)
			}

			testimLeftArrow.addEventListener("click", function() {
				playSlide(currentSlide -= 1);
			})

			testimRightArrow.addEventListener("click", function() {
				playSlide(currentSlide += 1);
			})

			for (var l = 0; l < testimDots.length; l++) {
				testimDots[l].addEventListener("click", function() {
					playSlide(currentSlide = testimDots.indexOf(this));
				})
			}

			playSlide(currentSlide);

			// keyboard shortcuts
			document.addEventListener("keyup", function(e) {
				switch (e.keyCode) {
					case 37:
						testimLeftArrow.click();
						break;

					case 39:
						testimRightArrow.click();
						break;

					case 39:
						testimRightArrow.click();
						break;

					default:
						break;
				}
			})

			testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
			})

			testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;

				touchPosDiff = touchStartPos - touchEndPos;

				console.log(touchPosDiff);
				console.log(touchStartPos);
				console.log(touchEndPos);


				if (touchPosDiff > 0 + ignoreTouch) {
					testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
					testimRightArrow.click();
				} else {
					return;
				}

			})
		}
	</script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.zoomslider.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>