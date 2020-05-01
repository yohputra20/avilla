<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="welcome to codeglim">
    <meta name='copyright' content='codeglim'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Tag -->
    <title>Avilla &minus; PT Avilla Jaya Teknik</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/icon_tab_browser.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet">

    <!-- Google Map Api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"
        type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/font-awesome.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/animate.min.css">

    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/slicknav.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/owl.carousel.min.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/magnific-popup.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/bootstrap.min.css">

    <!-- Bizpro Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/default.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/responsive.css">

    <!-- You Can Use 8 Different color Just remove bottom of the comment tag -->

    <!--<link rel="stylesheet" href="css/skin/red.css">-->
    <!--<link rel="stylesheet" href="css/skin/amest.css">-->
    <!--<link rel="stylesheet" href="css/skin/yellow.css">-->
    <!--<link rel="stylesheet" href="css/skin/blaze.css">-->
    <!--<link rel="stylesheet" href="css/skin/blue.css">-->
    <!--<link rel="stylesheet" href="css/skin/orange.css">-->
    <!--<link rel="stylesheet" href="css/skin/green.css">-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/skin/green.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <link rel="stylesheet" href="#" id="colors">
</head>

<body>

    <!-- Preloader -->
    <div class="loader">
        <div class="l-inner">
            <div class="k-spinner">
                <div class="k-bubble-1"></div>
                <div class="k-bubble-2"></div>
            </div>
        </div>
    </div>
    <!--/ End Preloader -->

    <!-- Start Header -->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <!-- Logo -->
                    <div class="logo" style="margin-top:0px;">
                        <a href="index.html"><img src="<?php echo base_url();?>assets/admin/img/logo_front.png"
                                style="width: 170px;" /></a>
                    </div>
                    <!--/ End Logo -->
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="nav-area">
                        <!-- Main Menu -->
                        <nav class="mainmenu">
                            <div class="mobile-nav"></div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav menu">
                                    <li class="active"><a href="#j-slider">Home</a>
                                    </li>
                                    <li><a href="#service">Services</a></li>
                                    <li><a href="#portfolio">Product</a></li>
                                    <li><a href="#team">Client</a></li>
                                    <li><a href="#about-us">About</a>
                                    </li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!--/ End Main Menu -->
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!--/ End Header -->

    <!-- Start Slider -->
    <section id="j-slider">
        <div class="slide-main">

            <?php foreach($data_banner as $row) { ?>
            <!-- Single Slider -->
            <div class="single-slider" style="background-image:url('<?php echo base_url()."assets/admin/upload/banner/".$row['img_path']; ?>');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <!-- Slider Text -->
                            <div class="slide-text left">
                                <div class="slider-inner">
                                    <!-- <h1></h1> -->
                                    <?php echo $row['description']; ?>
                                    <!-- <div class="slide-button">
                                        <a href="#" class="button">Buy Bizpro</a>
                                        <a href="#contact" class="button primary">Contact Us</a>
                                    </div> -->
                                </div>
                            </div>
                            <!--/ End Slider Text -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
            <?php } ?>

            
        </div>
    </section>
    <!--/ End Slider -->

    <!-- Start Service -->
    <section id="service" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="section-title center">
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Service -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                    <div class="single-service">
                        <i class="fa fa-check"></i>
                        <h2>Web Design</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                    </div>
                </div>
                <!--/ End Single Service -->
                <!-- Single Service -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
                    <div class="single-service">
                        <i class="fa fa-edit"></i>
                        <h2>Web Developments</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                    </div>
                </div>
                <!--/ End Single Service -->
                <!-- Single Service -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
                    <div class="single-service">
                        <i class="fa fa-send"></i>
                        <h2>Smart Coding</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                    </div>
                </div>
                <!--/ End Single Service -->
                <!-- Single Service -->
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
                    <div class="single-service">
                        <i class="fa fa-code"></i>
                        <h2>UI/UX Design</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                    </div>
                </div>
                <!--/ End Single Service -->
            </div>
        </div>
    </section>
    <!--/ End Service -->


    <!-- Start Products -->
    <section id="portfolio" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="section-title center">
                        <h2>Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="portfolio-carousel">
                        <!-- Single Portfolio -->
                        <div class="portfolio-single">
                            <a href="images/portfolio/1.jpg" class="zoom">
                                <div class="portfolio-head">
                                    <img src="<?php echo base_url();?>assets/front/images/portfolio/1.jpg" alt="" />
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                            <div class="text">
                                <h4><a href="portfolio-single.html">Portfolio 1</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
                            </div>
                        </div>
                        <!--/ End Portfolio -->
                        <!-- Single Portfolio -->
                        <div class="portfolio-single">
                            <a href="images/portfolio/2.jpg" class="zoom">
                                <div class="portfolio-head">
                                    <img src="<?php echo base_url();?>assets/front/images/portfolio/2.jpg" alt="" />
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                            <div class="text">
                                <h4><a href="portfolio-single.html">Portfolio 2</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
                            </div>
                        </div>
                        <!--/ End Portfolio -->
                        <!-- Single Portfolio -->
                        <div class="portfolio-single">
                            <a href="images/portfolio/3.jpg" class="zoom">
                                <div class="portfolio-head">
                                    <img src="<?php echo base_url();?>assets/front/images/portfolio/3.jpg" alt="" />
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                            <div class="text">
                                <h4><a href="portfolio-single.html">Portfolio 3</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
                            </div>
                        </div>
                        <!--/ End Portfolio -->
                        <!-- Single Portfolio -->
                        <div class="portfolio-single">
                            <a href="images/portfolio/4.jpg" class="zoom">
                                <div class="portfolio-head">
                                    <img src="<?php echo base_url();?>assets/front/images/portfolio/4.jpg" alt="" />
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                            <div class="text">
                                <h4><a href="portfolio-single.html">Portfolio 4</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
                            </div>
                        </div>
                        <!--/ End Portfolio -->
                        <!-- Single Portfolio -->
                        <div class="portfolio-single">
                            <a href="images/portfolio/5.jpg" class="zoom">
                                <div class="portfolio-head">
                                    <img src="<?php echo base_url();?>assets/front/images/portfolio/5.jpg" alt="" />
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                            <div class="text">
                                <h4><a href="portfolio-single.html">Portfolio 5</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
                            </div>
                        </div>
                        <!--/ End Portfolio -->
                        <!-- Single Portfolio -->
                        <div class="portfolio-single">
                            <a href="images/portfolio/6.jpg" class="zoom">
                                <div class="portfolio-head">
                                    <img src="<?php echo base_url();?>assets/front/images/portfolio/6.jpg" alt="" />
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                            <div class="text">
                                <h4><a href="portfolio-single.html">Portfolio 6</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
                            </div>
                        </div>
                        <!--/ End Portfolio -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Products -->

    <!-- Start Client -->
    <section id="team" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="section-title center">
                        <h2>Client</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                    <!-- Single Client -->
                    <div class="single-team">
                        <div class="team-head">
                            <img src="<?php echo base_url();?>assets/front/images/team/team1.jpg" alt="" />
                        </div>
                        <div class="team-info">
                            <div class="name">
                                <h4>Rimu Akhter<span>Creative Director</span></h4>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="team-head">
                            <img src="<?php echo base_url();?>assets/front/images/team/team2.jpg" alt="" />
                        </div>
                        <div class="team-info">
                            <div class="name">
                                <h4>Shakil Hossain<span>Web Developer</span></h4>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
                    <!-- Single Team -->
                    <div class="single-team active">
                        <div class="team-head">
                            <img src="<?php echo base_url();?>assets/front/images/team/team3.jpg" alt="" />
                        </div>
                        <div class="team-info">
                            <div class="name">
                                <h4>Sufia<span>Server Administor</span></h4>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                        </div>
                    </div>
                    <!--/ End Single Team -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="team-head">
                            <img src="<?php echo base_url();?>assets/front/images/team/team4.jpg" alt="" />
                        </div>
                        <div class="team-info">
                            <div class="name">
                                <h4>SM Jehad<span>UI/UX Design</span></h4>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                        </div>
                    </div>
                    <!--/ End Single Client -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Client -->

    <!-- Start About Us -->
    <section id="about-us" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="section-title center">
                        <h2>About <span>US</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- About Image -->
                <div class="col-md-5 col-sm-12 col-xs-12 wow slideInLeft">
                    <div class="about-main">
                        <div class="about-img">
                            <img src="<?php echo base_url();?>assets/front/images/choose-image.png" alt="" />
                        </div>
                    </div>
                </div>
                <!--/ End About Image -->
                <div class="col-md-7 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="1s">
                    <!-- About Tab -->
                    <div class="tabs-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#welcome" data-toggle="tab">Welcome</a></li>
                            <li role="presentation"><a href="#about" data-toggle="tab">About Us</a></li>
                            <li role="presentation"><a href="#information" data-toggle="tab">Information</a></li>
                        </ul>
                        <!--/ End Tab Nav -->
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="welcome">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Tab -->
                                        <div class="single-tab">
                                            <i class="fa fa-check"></i>
                                            <h4>Super Technology</h4>
                                            <p>It has roots in a piece of classical Latin literature from 45 BC[..]</p>
                                        </div>
                                        <!--/ End Single Tab -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Tab -->
                                        <div class="single-tab">
                                            <i class="fa fa-support"></i>
                                            <h4>Live Support</h4>
                                            <p>It has roots in a piece of classical Latin literature from 45 BC[..]</p>
                                        </div>
                                        <!--/ End Single Tab -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Tab -->
                                        <div class="single-tab">
                                            <i class="fa fa-send"></i>
                                            <h4>fast Delivery</h4>
                                            <p>It has roots in a piece of classical Latin literature from 45 BC[..]</p>
                                        </div>
                                        <!--/ End Single Tab -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Tab -->
                                        <div class="single-tab">
                                            <i class="fa fa-rocket"></i>
                                            <h4>Speed Marketing</h4>
                                            <p>It has roots in a piece of classical Latin literature from 45 BC[..]</p>
                                        </div>
                                        <!--/ End Single Tab -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="about">
                                <div class="about">
                                    <p>Aliquam erat volutpat. Phasellus lobortis erat vitae fringilla malesuada. Fusce
                                        semper purus suscipit ultricies tincidunt. Nulla eget turpis ac leo euismod
                                        pharetra at nec diam. Etiam id purus lacus. Suspendisse ligula nulla, cursus non
                                        lacinia tincidunt, elementum eu sapien</p>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old.</p>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old.</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="information">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Tab -->
                                        <div class="single-tab">
                                            <i class="fa fa-check"></i>
                                            <h4>Super Technology</h4>
                                            <p>It has roots in a piece of classical Latin literature from 45 BC[..]</p>
                                        </div>
                                        <!--/ End Single Tab -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Tab -->
                                        <div class="single-tab">
                                            <i class="fa fa-support"></i>
                                            <h4>Live Support</h4>
                                            <p>It has roots in a piece of classical Latin literature from 45 BC[..]</p>
                                        </div>
                                        <!--/ End Single Tab -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Tab -->
                                        <div class="single-tab">
                                            <i class="fa fa-send"></i>
                                            <h4>fast Delivery</h4>
                                            <p>It has roots in a piece of classical Latin literature from 45 BC[..]</p>
                                        </div>
                                        <!--/ End Single Tab -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Tab -->
                                        <div class="single-tab">
                                            <i class="fa fa-rocket"></i>
                                            <h4>Speed Marketing</h4>
                                            <p>It has roots in a piece of classical Latin literature from 45 BC[..]</p>
                                        </div>
                                        <!--/ End Single Tab -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Tab Content -->
                    </div>
                    <!--/ End About Tab -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->

    <!-- Contact Us -->
    <section id="contact" class="section" style="border-top:1px solid #d2cccc;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="section-title center">
                        <h2>Contact <span>US</span></h2>
                    </div>
                </div>
            </div>
            <!-- Google Map -->
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <form class="form" method="post" action="mail/mail.php">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" required="required">
                        </div>
                        <div class="form-group">
                            <textarea name="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button primary"><i class="fa fa-send"></i>Submit</button>
                        </div>
                    </form>
                </div>
                <!--/ End Contact Form -->
            </div>
        </div>
        <div class="gmap">
            <div class="map"></div>
        </div>
    </section>
    <!--/ End Clients Us -->

    <!-- Location -->
    <section id="location" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                    <!-- Single Address -->
                    <div class="single-address">
                        <i class="fa fa-phone"></i>
                        <h4>Our Phone</h4>
                        <p>+8801812345678, +8801700000123</p>
                    </div>
                    <!--/ End Single Address -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
                    <!-- Single Address -->
                    <div class="single-address active">
                        <i class="fa fa-phone"></i>
                        <h4>Office Location</h4>
                        <p>240, Khilgaon Dhaka 1230.</p>
                    </div>
                    <!--/ End Single Address -->
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
                    <!-- Single Address -->
                    <div class="single-address">
                        <i class="fa fa-phone"></i>
                        <h4>Corporate Email</h4>
                        <p>info@mizan.com, support@mizan.com</p>
                    </div>
                    <!--/ End Single Address -->
                </div>

            </div>
        </div>
    </section>
    <!--/ End Location -->



    <!-- Start Footer -->
    <footer id="footer" class="wow fadeIn">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html">Avilla</a>
                            <br>
                            <span style="font-size: 25px;">Sustainable Solution</span>
                        </div>
                        <!--/ End Logo -->
                        <!-- Social -->
                        <ul class="social">
                            <li class="active"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                        <!--/ End Social -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="text">
                            <p>&copy; Copyright 2020,<span> PT Avilla Jaya Teknik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Copyright -->
    </footer>
    <!--/ End Footer -->

    <!-- Jquery JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.min.js"></script>

    <!-- Colors JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/colors.js"></script>

    <!-- Google Map JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/gmap.js"></script>

    <!-- Modernizr JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/modernizr.min.js"></script>

    <!-- Appear JS-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.appear.js"></script>

    <!-- Animate JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/wow.min.js"></script>

    <!-- Onepage Nav JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.nav.js"></script>

    <!-- Yt Player -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/ytplayer.min.js"></script>

    <!-- Popup JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.magnific-popup.min.js"></script>

    <!-- Typed JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/typed.min.js"></script>

    <!-- Scroll Up JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.scrollUp.min.js"></script>

    <!-- Slick Nav JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.slicknav.min.js"></script>

    <!-- Counterup JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.counterup.min.js"></script>

    <!-- Owl Carousel JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/owl.carousel.min.js"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/bootstrap.min.js"></script>

    <!-- Main JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/main.js"></script>
</body>

</html>