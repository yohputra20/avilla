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

<!-- Start About Us -->
<section id="about-us" class="section about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn" style="background-color:#ffffff94">
                <div class="section-title center">
                    <h2 class="h2about">About Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- About Image -->
            <!-- <div class="col-md-5 col-sm-12 col-xs-12 wow slideInLeft">
                    <div class="about-main">
                        <div class="about-img">
                            <img src="<?php echo base_url();?>assets/admin/img/icon_tab_browser.png"
                                alt="PT. Avilla Jaya Teknik" style="width: 70%;" />
                        </div>
                    </div>
                </div> -->
            <!--/ End About Image -->
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="1s">
                <!-- About Tab -->
                <div class="tabs-main" style="margin-top:0px;background-color:#ffffff94;box-shadow:none;">
                    <!-- Tab Nav -->
                    <!-- <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#welcome" data-toggle="tab">Welcome</a></li>
                            <li role="presentation"><a href="#about" data-toggle="tab">Vision & Mission</a></li>
                        </ul> -->
                    <!--/ End Tab Nav -->
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="welcome">
                            <div class="about">
                                <?php echo $data_about[0]['description'];?>
                            </div>
                        </div>
                        <!-- <div role="tabpanel" class="tab-pane fade in" id="about">
                                <div class="about">
                                    <?php echo $data_about[0]['vision_mission'];?>
                                </div>
                            </div> -->

                    </div>
                    <!--/ End Tab Content -->
                </div>
                <!--/ End About Tab -->
            </div>
        </div>
    </div>
</section>
<!--/ End About Us -->



<!-- Start Products -->
<section id="product" class="section">
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
                                <img class="bttrlazyloading"
                                    data-bttrlazyloading-sm-src="<?php echo base_url()."assets/admin/upload/product/".$row['img_path']; ?>"
                                    alt="<?php echo $row['alt']?>" />
                                <i class="fa fa-search"></i>
                            </div>
                        </a>
                        <div class="text">
                            <h4><?php echo $row['title']; ?></h4>
                            <p>
                                <?php 
                                    $description = strlen($row['description']) > 200 ? substr($row['description'],0,200)."..." : $row['description'];
                                    echo $description; 
                                    ?>
                            </p>
                            <?php //if(strlen($row['description']) > 200) { ?>
                            <a href="<?php echo base_url();?>detail-produk/product/<?php echo strtolower($row['slug']); ?>"
                                title="Baca selengkapnya"><u>Baca selengkapnya </u></a>
                            <?php //} ?>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Products -->
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
                    <div class="hover_image_service_box">
                        <img class="img_services bttrlazyloading"
                            data-bttrlazyloading-sm-src="<?php echo base_url()."assets/admin/upload/service/".$row['img_path']; ?>"
                            alt="<?php echo $row['meta_title']?>">
                    </div>
                    <br>
                    <h2><?php echo $row['title']; ?></h2>

                    <?php $description = strlen($row['description']) > 200 ? substr($row['description'],0,200)."..." : $row['description'];
                                  echo $description; ?>

                    <?php if(strlen($row['description']) > 200) { ?>
                    <br>
                    <a href="<?php echo base_url();?>front/home_controllers/detail_page/service/<?php echo $row['slug']?>"
                        title="Baca selengkapnya"><u>Baca selengkapnya </u></a>
                    <?php } ?>


                </div>

            </div>
            <?php $delay += 2; } ?>

        </div>
    </div>
</section>
<!--/ End Service -->

<!-- Start Client -->
<section id="clients" class="section wow fadeIn" style="border-top:1px solid #d2cccc; background:white;">
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

                    <?php $o=0; foreach($data_client as $row) {  if($o<6) {?>
                    <div class="single-client">
                        <img src="<?php echo base_url()."assets/admin/upload/client/".$row['logo_path']; ?>"
                            alt="<?php echo $row['alt']?>" class="img-responsive">
                    </div>
                    <?php }; 
                    $o++; } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Client -->



<!-- Contact Us -->
<section id="contact" class="section" style="border-top:1px solid #d2cccc; background:white;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                <div class="section-title center">
                    <h2>Kontak <span>Kami</span></h2>
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
                <a title="Lokasi PT Avilla Jaya Teknik" target="_blank"
                    href="https://www.google.com/maps/place/PT+Avilla+Jaya+Teknik/@-6.1254101,106.7302827,16.75z/data=!4m5!3m4!1s0x2e6a1dc6db31b3d5:0x2bb145509be38a7e!8m2!3d-6.1254049!4d106.7295137">
                    <img data-bttrlazyloading-sm-src="<?php echo base_url();?>assets/front/images/maps_avilla.png"
                        class="img-responsive bttrlazyloading" style="border: 1px solid #dfdfdf;" />
                </a>
            </div>
            <!--/ End Contact Form -->
        </div>
    </div>
    <!-- <div class="gmap">
            <div class="map"></div>
        </div> -->
</section>
<!--/ End Clients Us -->