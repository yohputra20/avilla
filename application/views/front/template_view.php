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
                                    <li><a href="#clients">Client</a></li>
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
            <div class="single-slider"
                style="background-image:url('<?php echo base_url()."assets/admin/upload/banner/".$row['img_path']; ?>');">
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
                <?php $delay=4; foreach($data_service as $row) { ?>
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.<?php echo $delay?>s">
                    <div class="single-service">
                        <img src="<?php echo base_url()."assets/admin/upload/service/".$row['img_path']; ?>"
                            alt="<?php echo $row['meta_title']?>">
                        <br>
                        <h2><?php echo $row['title']; ?></h2>
                        <?php echo $row['description']; ?>
                    </div>
                </div>
                <?php $delay += 2; } ?>

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

                        <?php foreach($data_product as $row) { ?>
                        <div class="portfolio-single">
                            <a href="<?php echo base_url()."assets/admin/upload/product/".$row['img_path']; ?>"
                                alt="<?php echo $row['alt']?>" class="zoom">
                                <div class="portfolio-head">
                                    <img src="<?php echo base_url()."assets/admin/upload/product/".$row['img_path']; ?>"
                                        alt="<?php echo $row['alt']?>" />
                                    <i class="fa fa-search"></i>
                                </div>
                            </a>
                            <div class="text">
                                <h4><a href="#"><?php echo $row['title']; ?></a></h4>
                                <p><?php echo $row['description']; ?></p>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Products -->

    <!-- Start Client -->
    <section id="clients" class="section wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="section-title center">
                        <h2>Client</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-carousel">
                        <!-- Single Clients -->

                        <?php foreach($data_client as $row) { ?>
                        <div class="single-client">
                            <img src="<?php echo base_url()."assets/admin/upload/client/".$row['logo_path']; ?>" alt="<?php echo $row['alt']?>" class="img-responsive">
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Client -->

    <!-- Start About Us -->
    <section id="about-us" class="section" style="padding-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="section-title center">
                        <h2 class="h2about" style="color: white;">About The Company</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- About Image -->
                <div class="col-md-5 col-sm-12 col-xs-12 wow slideInLeft">
                    <div class="about-main">
                        <div class="about-img">
                            <img src="<?php echo base_url();?>assets/admin/img/icon_tab_browser.png" alt="PT. Avilla Jaya Teknik" style="width: 70%;"/>
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
                            <li role="presentation"><a href="#about" data-toggle="tab">Vision & Mission</a></li>
                        </ul>
                        <!--/ End Tab Nav -->
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="welcome">
                                <div class="about">
                                    <?php echo $data_about[0]['description']?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="about">
                                <div class="about">
                                    <?php echo $data_about[0]['vision_mission']?>
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
    <section id="contact" class="section" style="border-top:1px solid #d2cccc; background:white;">
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
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <?php echo $data_contactus[0]['description']; ?>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="<?php echo base_url();?>assets/admin/img/maps.jpg" class="img-responsive" style="border: 1px solid #dfdfdf;"/>
                </div>
                <!--/ End Contact Form -->
            </div>
        </div>
        <!-- <div class="gmap">
            <div class="map"></div>
        </div> -->
    </section>
    <!--/ End Clients Us -->

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