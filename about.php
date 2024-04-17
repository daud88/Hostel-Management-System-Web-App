<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hostel website - About us</title>
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
    /* Base */
    .whatsapp-btn-container {
        position: fixed;
        opacity: 0;
        bottom: -50px;
        padding: 24px;
        margin: -42px -8px;
        animation: fade-up 1000ms forwards;
        animation-delay: 1000ms;
        z-index: 4;
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

    .whatsapp-btn-container .whatsapp-btn:hover+span {
        transform: rotateZ(0deg) translateX(0px);
        opacity: 1;
    }

    body {
        padding: 0;
        margin: 0;
        background-color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    h1 {
        color: hsl(0, 0%, 28%);
        font-size: 20px;
        /* font-weight: bold; */
        font-family: monospace;
        letter-spacing: 2px;
        cursor: pointer;
    }

    h1 span {
        transition: 0.5s ease-out;
    }

    h1:hover span:nth-child(1) {
        margin-right: 5px;
    }

    h1:hover span:nth-child(1):after {
        content: "'";
    }

    h1:hover span:nth-child(2) {
        margin-left: 30px;
    }

    h1:hover span {
        color: #F44336;
        text-shadow: 0 0 0px #F44334, 0 0 0px #F44336, 0 0 0px #F44336;
    }

    /* h1,
		h2,
		h3,
		h4,
		h5,
		h6 {

		} */

    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }

    a,
    a:active,
    a:focus {
        color: #6f6f6f;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    section {
        padding: 60px 0;
        /* min-height: 100vh;*/
    }

    .sec-title {
        position: relative;
        z-index: 1;
        margin-bottom: 60px;
    }

    .sec-title .title {
        position: relative;
        display: block;
        font-size: 18px;
        line-height: 24px;
        color: #e91e63;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .sec-title h2 {
        position: relative;
        display: block;
        font-size: 40px;
        line-height: 1.28em;
        color: #222222;
        font-weight: 600;
        padding-bottom: 18px;
    }

    .sec-title h2:before {
        position: absolute;
        content: '';
        left: 0px;
        bottom: 0px;
        width: 50px;
        height: 3px;
        background-color: #d1d2d6;
    }

    .sec-title .text {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
        margin-top: 35px;
    }

    .sec-title.light h2 {
        color: #ffffff;
    }

    .sec-title.text-center h2:before {
        left: 50%;
        margin-left: -25px;
    }

    .list-style-one {
        position: relative;
    }

    .list-style-one li {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #222222;
        font-weight: 400;
        padding-left: 35px;
        margin-bottom: 12px;
    }

    .list-style-one li:before {
        content: "\f058";
        position: absolute;
        left: 0;
        top: 0px;
        display: block;
        font-size: 18px;
        padding: 0px;
        color: #ff2222;
        font-weight: 600;
        -moz-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1.6;
        font-family: "Font Awesome 5 Free";
    }

    .list-style-one li a:hover {
        color: #44bce2;
    }

    .btn-style-one {
        position: relative;
        display: inline-block;
        font-size: 17px;
        line-height: 30px;
        color: #ffffff;
        padding: 10px 30px;
        font-weight: 600;
        overflow: hidden;
        letter-spacing: 0.02em;
        background-color: #e91e63;
    }

    .btn-style-one:hover {
        /* background-color: #0794c9; */
        color: #ffffff;
    }

    .about-section {
        position: relative;
        padding: 120px 0 70px;
    }

    .about-section .sec-title {
        margin-bottom: 45px;
    }

    .about-section .content-column {
        position: relative;
        margin-bottom: 50px;
    }

    .about-section .content-column .inner-column {
        position: relative;
        padding-left: 30px;
    }

    .about-section .text {
        margin-bottom: 34px;
        font-size: 14px;
        line-height: 25px;
        color: black;
        font-weight: 400;
    }

    .about-section .list-style-one {
        margin-bottom: 45px;
    }

    .about-section .btn-box {
        position: relative;
    }

    .about-section .btn-box a {
        padding: 15px 50px;
    }

    .about-section .image-column {
        position: relative;
    }

    .about-section .image-column .text-layer {
        position: absolute;
        right: -110px;
        top: 50%;
        font-size: 325px;
        line-height: 1em;
        color: #ffffff;
        margin-top: -175px;
        font-weight: 500;
    }

    .about-section .image-column .inner-column {
        position: relative;
        padding-left: 80px;
        padding-bottom: 0px;
    }

    .about-section .image-column .inner-column .author-desc {
        position: absolute;
        bottom: 16px;
        z-index: 1;
        background: orange;
        padding: 10px 15px;
        left: 96px;
        width: calc(100% - 152px);
        border-radius: 50px;
    }

    .about-section .image-column .inner-column .author-desc h2 {
        font-size: 21px;
        letter-spacing: 1px;
        text-align: center;
        color: #fff;
        margin: 0;
    }

    .about-section .image-column .inner-column .author-desc span {
        font-size: 16px;
        letter-spacing: 6px;
        text-align: center;
        color: #fff;
        display: block;
        font-weight: 400;
    }

    .about-section .image-column .inner-column:before {
        content: '';
        position: absolute;
        width: calc(50% + 80px);
        height: calc(100% + 160px);
        top: -80px;
        left: -3px;
        background: transparent;
        z-index: 0;
        border: 44px solid #e91e63;
    }

    .about-section .image-column .image-1 {
        position: relative;
    }

    .about-section .image-column .image-2 {
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .about-section .image-column .image-2 img,
    .about-section .image-column .image-1 img {
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        border-radius: 46px;
    }

    .about-section .image-column .video-link {
        position: absolute;
        left: 70px;
        top: 170px;
    }

    .about-section .image-column .video-link .link {
        position: relative;
        display: block;
        font-size: 22px;
        color: #191e34;
        font-weight: 400;
        text-align: center;
        height: 100px;
        width: 100px;
        line-height: 100px;
        background-color: #ffffff;
        border-radius: 50%;
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .about-section .image-column .video-link .link:hover {
        background-color: #191e34;

    }
    </style>

</head>

<body>
    <div id="wrapper">

        <!-- start header -->
        <?php include('includes/header.php') ?>
        <!-- end header -->
        <!-- Whatsapp Logo -->
        <div class="whatsapp-btn-container">
            <a class="whatsapp-btn"
                href="https://wa.me/923234354739?text=Can you provide pin location to the hostel?"><i
                    class="fab fa-whatsapp"></i></a>
            <span>Contact Us</span>
        </div>
        <section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pageTitle">About Us</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <section class="section-padding">
                <div class="container">
                    <div class="row showcase-section">
                        <div class="col-md-6">
                            <img src="img/bg_6.jpg" alt="showcase image" width="500px;" height="272px;">
                        </div>
                        <div class="col-md-6">
                            <div class="about-text">
                                <h3>Our <span class="color">Mission</span></h3>
                                <p style="
    margin-bottom: 34px;
    font-size: 14px;
    line-height: 25px;
    color: black;
    font-weight: 400;
">Our mission is to revolutionize hostel management by providing an innovative and comprehensive software solution. We
                                    are dedicated to empowering hostel owners and managers with the tools and resources
                                    they need to streamline operations, enhance guest experiences, and boost overall
                                    efficiency.</p>
                                <p style="
    margin-bottom: 34px;
    font-size: 14px;
    line-height: 25px;
    color: black;
    font-weight: 400;
">Ultimately, our mission is to become the preferred Hostel Management System globally, recognized for reliability,
                                    excellence, and exceptional customer support. We are passionate about helping
                                    hostels of all sizes optimize their operations, drive growth, and provide memorable
                                    experiences for their guests. Together, lets reimagine hostel management for a more
                                    efficient and delightful future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="sec-title">
                                <h3>Why <span class="color" style="
    color: #e91e63;
    text-transform: uppercase;
    font-weight: bold;
">Choose Us</span></h3>
                                <h2> We pride ourselves on creating an intuitive and user-friendly interface.</h2>
                            </div>
                            <div class="text">Our dedicated customer support team is always ready to assist you. We
                                provide personalized support to address your specific needs and ensure a smooth
                                experience with our system.We understand the budget constraints of hostels, especially
                                smaller ones. Our pricing is competitive and designed to offer excellent value for
                                money, catering to hostels of all sizes.</div>

                            <div class="text">
                                Choosing our Hostel Management System means partnering with a reliable and innovative
                                platform that prioritizes your hostel's success. Let us help you elevate your hostel
                                management, improve guest experiences, and drive growth in your business. Join us on the
                                journey to optimize your hostel operations and create lasting memories for your guests.
                            </div>
                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                            <div class="author-desc">
                                <h2></h2>
                                <span></span>
                            </div>
                            <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img
                                        title=""
                                        src="https://img.freepik.com/premium-vector/hotel-building-office-building-business-flat-style_199064-361.jpg"
                                        alt=""></a></figure>

                        </div>
                    </div>

                </div>
                <div class="sec-title">
                    <span class="title">Our Future Goal</span>
                    <h2>We want to lead in innovation & Technology</h2>
                </div>
                <div class="text">
                    We are investing in a more intuitive and user-friendly interface to ensure that our system is easy
                    to navigate for all users, regardless of their technical expertise.
                </div>
                <div class="text">
                    We are developing a dedicated mobile app for hostel administrators, allowing them to manage their
                    hostels on the go, receive real-time notifications, and access essential features from their
                    smartphones or tablets. </div>
                <div class="text">
                    Our upcoming updates will include more comprehensive reporting and analytics tools. Hostel owners
                    will gain valuable insights into occupancy trends, revenue performance, and guest preferences to
                    make informed decisions. </div>
                <div class="text">
                    To enhance guest satisfaction, we will introduce automated communication tools that send
                    personalized messages to guests pre-arrival, during their stay, and after check-out. </div>
                <h1><span>I</span> would<span> say keep visiting our website and enjoy the quality content</span></h1>
            </div>
        </section>
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
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>