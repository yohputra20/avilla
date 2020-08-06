<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php echo $data_about[0]['meta_description'];?>">
    <meta name="keywords" content="<?php echo $data_about[0]['meta_title'];?>">
    <meta name="author" content="Avilla">
    <meta name='copyright' content='PT Avilla Jaya Teknik'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Tag -->
    <title>Avilla &minus; PT Avilla Jaya Teknik</title>

    <meta property="og:site_name" content="PT Avilla Jaya Teknik">
    <meta property="og:title" content="<?php echo $data_about[0]['meta_title'];?>" />
    <meta property="og:description" content="<?php echo $data_about[0]['meta_description'];?>" />
    <meta property="og:image" itemprop="image" content="<?php echo base_url();?>assets/admin/img/icon_tab_browser.png">
    <meta property="og:type" content="website" />
    <meta property="og:updated_time" content="1440432930" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/admin/img/icon_tab_browser.png">

    <!-- Google Font -->
    <link href="<?php echo base_url();?>assets/front/css/fonts.css" rel="stylesheet" type="text/css">



    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/font-awesome.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/animate.min.css">

    <!-- Slicknav CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/slicknav.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/owl.carousel.min.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/magnific-popup.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/bootstrap.min.css">

    <!-- Bizpro Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/responsive.css">

    <!-- You Can Use 8 Different color Just remove bottom of the comment tag -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/skin/green.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/front/css/bttrlazyloading.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166766177-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-166766177-1');
    </script>


</head>

<body>


    <!-- Preloader -->
    <!--<div class="loader">-->
    <!--    <div class="l-inner">-->
    <!--        <div class="k-spinner">-->
    <!--            <div class="k-bubble-1"></div>-->
    <!--            <div class="k-bubble-2"></div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--/ End Preloader -->


    <?php $this->load->view($header); ?>

    <?php $this->load->view($content_section); ?>

    <?php $this->load->view($footer); ?>

    <!-- Jquery JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.min.js"></script>

    <!-- Colors JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/colors.js"></script>

    <!-- Google Map JS -->
    <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/gmap.js"></script>  -->

    <!-- Modernizr JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/modernizr.min.js"></script>

    <!-- Appear JS-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.appear.js"></script>

    <!-- Animate JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/wow.min.js"></script>

    <!-- Onepage Nav JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.nav.js"></script>

    <!-- Popup JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.magnific-popup.min.js"></script>

    <!-- Typed JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/typed.min.js"></script>

    <!-- Scroll Up JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.scrollUp.min.js"></script>

    <!-- Slick Nav JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.slicknav.min.js"></script>

    <!-- Counterup JS -->
    <!--<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/waypoints.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.counterup.min.js"></script>

    <!-- Owl Carousel JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/owl.carousel.min.js"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/bootstrap.min.js"></script>
 <script src="<?php echo base_url() ?>assets/front/js/jqBootstrapValidation.js"></script>
    <!-- Main JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/main.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/front/js/jquery.bttrlazyloading.min.js"></script>

    <script>
        // $('.bttrlazyloading').bttrlazyloading({
        //     delay: 500,
        //     placeholder: '<?php echo base_url() ?>assets/front/images/loading_animate.gif'
        // });
    </script>
</body>

</html>