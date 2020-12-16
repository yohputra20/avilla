<!-- Start Slider -->
<section id="j-slider">
    <div class="slide-main">

        <?php foreach ($data_banner as $row) { ?>
            <!-- Single Slider -->
            <div class="single-slider" style="background-image:url('<?php echo base_url() . "assets/admin/upload/banner/" . $row['img_path']; ?>');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <!-- Slider Text -->
                            <div class="slide-text left">
                                <div class="slider-inner">
                                    <!-- <h1></h1> -->
                                    <?php echo $row['description']; ?>

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
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- About Image -->

            <!--/ End About Image -->
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="1s">
                <!-- About Tab -->
                <div class="tabs-main" style="margin-top:0px;background-color:#ffffff94;box-shadow:none;">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="welcome">
                            <div class="about">
                                <?php echo $data_about[0]['description']; ?>
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



<!-- Start Products -->
<section id="portfolio" class="section" style="border-top:1px solid #d2cccc;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                <div class="section-title center">
                    <h2>Our Product</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="portfolio-carousel">
                    <!-- Single Portfolio -->

                    <?php foreach ($data_product as $row) { ?>
                        <div class="portfolio-single">
                            <a href="<?php echo base_url() . "assets/admin/upload/product/" . $row['img_path']; ?>" alt="<?php echo $row['alt'] ?>" class="zoom">
                                <!-- <div class="portfolio-head"> -->
                                <img class="bttrlazyloading" src="<?php echo base_url() . "assets/admin/upload/product/" . $row['img_path']; ?>" alt="<?php echo $row['alt'] ?>" />

                                <!-- </div> -->
                            </a>
                            <div class="text">
                                <h4><?php echo $row['title']; ?></h4>
                                <p>
                                    <?php
                                    $description = strlen($row['description']) > 200 ? substr($row['description'], 0, 200) . "..." : $row['description'];
                                    echo $description;
                                    ?>
                                </p>
                                <?php //if(strlen($row['description']) > 200) { 
                                ?>
                                <a href="<?php echo base_url(); ?>detail/product/<?php echo strtolower($row['slug']); ?>" title="Baca selengkapnya"><u>Baca selengkapnya </u></a>
                                <?php //} 
                                ?>
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
<section id="service" class="section" style="border-top:1px solid #d2cccc; background:white;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
                <div class="section-title center">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Service -->
            <?php $delay = 4;
            foreach ($data_service as $row) { ?>
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.<?php echo $delay ?>s">

                    <div class="single-service">
                        <div class="hover_image_service_box">
                            <img class="img_services bttrlazyloading" src="<?php echo base_url() . "assets/admin/upload/service/" . $row['img_path']; ?>" alt="<?php echo $row['meta_title'] ?>">
                        </div>
                        <br>
                        <h2><?php echo $row['title']; ?></h2>

                        <?php $description = strlen($row['description']) > 200 ? substr($row['description'], 0, 200) . "..." : $row['description'];
                        echo $description; ?>

                        <?php if (strlen($row['description']) > 200) { ?>
                            <br>
                            <a href="<?php echo base_url(); ?>detail/service/<?php echo strtolower($row['slug']) ?>" title="Baca selengkapnya"><u>read more </u></a>
                        <?php } ?>


                    </div>

                </div>
            <?php $delay += 2;
            } ?>

        </div>
    </div>
</section>
<!--/ End Service -->

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

                    <?php $o = 0;
                    foreach ($data_client as $row) {
                        if ($o < 5) { ?>
                            <div class="single-client">
                                <img src="<?php echo base_url() . "assets/admin/upload/client/" . $row['logo_path']; ?>" alt="<?php echo $row['alt'] ?>" class="img-responsive">
                            </div>
                    <?php };
                        $o++;
                    } ?>
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
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>


        <!-- Google Map -->
        <div class="row">
            <!-- Contact Form -->

            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom:30px">
                <div class="row" style="margin-bottom:30px">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:30px">
                        <h4>Office : </h4>
                        <?php echo $data_contactus[0]['description']; ?>

                    </div>
                </div>
                <div class="row" style="margin-bottom:50px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4>Contact Info : </h4>
                        <?php
                        $telplink = "+62" . substr($data_contactus[0]['telp'], 1);
                        $telp = substr($data_contactus[0]['telp'], 0, 3) . "-" . substr($data_contactus[0]['telp'], 3);
                        if ($data_contactus[0]['telp'] != '') {
                            echo ' <i class="fa fa-phone fa-lg"></i> <a href="tel:' . $telplink . '" style="color:black">' . $telp . "</a>";
                        }
                        ?><br>
                        <?php
                        $whatsappsend = "62" . substr($data_contactus[0]['whatsapp'], 1);
                        $whatsappshow = substr($data_contactus[0]['whatsapp'], 0, 4) . "-" . substr($data_contactus[0]['whatsapp'], 4, 4) . "-" . substr($data_contactus[0]['whatsapp'], 8);
                        if ($data_contactus[0]['whatsapp'] != '') {
                            echo '  <i class="fa fa-whatsapp fa-lg"></i> <a target="_blank" style="color:black" href="https://api.whatsapp.com/send?phone=' . $whatsappsend . '&text=Saya%20ingin%20bertanya%20tentang">' . $whatsappshow . '</a>';
                        }
                        if ($data_contactus[0]['email'] != '') {

                        ?><br>
                            <i class="fa fa fa-envelope fa-lg"></i> <?php echo $data_contactus[0]['email']; ?><br>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
             <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a title="Lokasi PT Avilla Jaya Teknik" target="_blank"
                            href="https://www.google.com/maps/place/PT+Avilla+Jaya+Teknik/@-6.1362377,106.7355881,17.6z/data=!4m5!3m4!1s0x0:0x2bb145509be38a7e!8m2!3d-6.1361812!4d106.7372906">
                            <img src="<?php echo base_url(); ?>assets/front/images/maps_avilla.png"
                                class="img-responsive bttrlazyloading" style="border: 1px solid #dfdfdf;height:auto !important" />
                        </a>
                    </div>
                    </div>
                <!-- <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">

                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:30px">
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" id="name" type="text" placeholder="Nama" required="required" data-validation-required-message="Nama harus di isi">
                                <p class="help-block text-warning" style="color:red"></p>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Email harus di isi">
                                <p class="help-block text-warning" style="color:red"></p>
                            </div>
                            <div class="form-group">
                                <label>Telp</label>
                                <input class="form-control" id="phone" type="number" inputmode="numeric" pattern="[0-9]*" placeholder="Telp" required="required" data-validation-required-message="Telp harus di isi">
                                <p class="help-block text-warning" style="color:red"></p>
                            </div>

                            <div class="form-group">
                                <label>Pesan</label>
                                <textarea class="form-control" rows="15" id="message" placeholder="Pesan" required="required" data-validation-required-message="Pesan Harus Di isi"></textarea>
                                <p class="help-block text-warning" style="color:red"></p>
                            </div>
                            <div class="text-right">
                                <div id="success"></div>
                                <button class="btn btn-primary btn-contactus btn-md" id="sendMessageButton" type="submit">Kirim</button>
                            </div>
                        </div>

                    </form>
                    
                <!-- </div> -->

            </div>
            <!--/ End Contact Form -->
        </div>
    </div>
    <!-- <div class="gmap">
            <div class="map"></div>
        </div> -->
</section>
<input type="hidden" id="baseurl" value="<?php echo base_url(); ?>">
<!--/ End Clients Us -->
