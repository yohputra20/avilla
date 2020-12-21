<!-- Start Breadcrumbs -->
<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title_content; ?></h2>

            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->
<!-- Start blog -->
<section id="blog" class="single section page">
    <?php
    if ($menu_active == 'product') { ?>
        <div class="container" style="background-color: white;">

            <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                <div class="col-md-2  hidden-xs ">

                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 text-center">
                    <img src="<?php echo $path_image . $data_detail['img_path']; ?>" alt="<?php if (isset($data_detail['meta_title'])) {
                                                                                                echo $data_detail['meta_title'];
                                                                                            } else {
                                                                                                $data_detail['alt'];
                                                                                            }; ?>">

                </div>
                <div class="col-md-2  hidden-xs ">

                </div>
            </div>
            <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <?php echo $data_detail['description']; ?>

                </div>

            </div>

            <!-- JIKA PRODUK GENSET -->
            <?php if ($data_sub_detail[0]['product_id'] == "1") { ?>
                <div class="row" style="padding-top: 20px;">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h3 style="margin-bottom:0px">Powered by :</h3>

                    </div>

                </div>
                <div class="row" style="padding-bottom: 20px;">
                    <div class="col-md-2 hidden-xs"></div>
                    <div class="col-md-8 col-sm-12 col-xs-12 text-center">
                        <div class="row align-center">
                            <?php foreach ($data_sub_detail as $row) { ?>
                                <a href="<?php echo base_url(); ?>spesifikasi-produk/<?php echo $row['id'] ?>">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                        <div class="single-blog detailblog">

                                            <div class="blog-content">

                                                <?php if ($row['path_logo'] != "") { ?>
                                                    <img class="imglogoproduct" src="<?php echo base_url() . "assets/admin/upload/product/" . $row['path_logo']; ?>" alt="<?php if (isset($row['meta_title'])) {
                                                                                                                                                                            }; ?>">
                                                <?php } else { ?>
                                                    <img class="imglogoproduct" src="<?php echo base_url() . "assets/front/images/no_image.png"; ?>" style="height:80px" alt="<?php if (isset($row['meta_title'])) {
                                                                                                                                                                                    echo $row['meta_title'];
                                                                                                                                                                                }; ?>">
                                                <?php } ?>
                                            </div>
                                            <div class="blog-footer" style="background-color:#919191;color:#fff;height:20%">
                                                <center>
                                                    <h5 style="margin:0px;padding:3%"><?php echo ucwords($row['title']); ?></h5>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>

                    </div>
                    <div class="col-md-2 hidden-xs"></div>
                </div>

                <!-- JIKA PRODUK GENSET PORTABLE -->
            <?php } else { ?>
                <div class="row rowlist" style="font-size: smaller;">
                    <?php foreach ($data_sub_detail as $row) { ?>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="single-blog productlautop" style="margin-top:10px;margin-bottom:10px">
                                <div class="blog-content">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <?php if ($row['path_img'] != "") { ?>
                                                <?php if (@fclose(@fopen(base_url() . "assets/admin/upload/product/" . $row['path_img'], "r"))) {  ?>
                                                    <img src="<?php echo base_url() . "assets/admin/upload/product/" . $row['path_img']; ?>" alt="<?php if (isset($row['meta_title'])) {
                                                                                                                                                        echo $row['meta_title'];
                                                                                                                                                    } else {
                                                                                                                                                        $row['title'];
                                                                                                                                                    }; ?>">
                                                <?php } else { ?>
                                                    <img src="<?php echo base_url() . "assets/front/images/no_image.png"; ?>" alt="<?php if (isset($row['meta_title'])) {
                                                                                                                                        echo $row['meta_title'];
                                                                                                                                    } else {
                                                                                                                                        $row['title'];
                                                                                                                                    }; ?>">
                                                <?php } ?>

                                            <?php } else { ?>
                                                <img src="<?php echo base_url() . "assets/front/images/no_image.png"; ?>" alt="<?php if (isset($row['meta_title'])) {
                                                                                                                                    echo $row['meta_title'];
                                                                                                                                } else {
                                                                                                                                    $row['title'];
                                                                                                                                }; ?>">
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-12">

                                            <h4><?php echo (isset($row['title']) ? $row['title'] : "-"); ?>
                                            </h4>
                                            <span style="font-size: small;">
                                                <?php echo (isset($row['description']) ? $row['description'] : "-"); ?>
                                            </span>
                                            <br>
                                            <span >
                                            <?php $nomor= "62".substr($data_contactus[0]['whatsapp'],1) ;
                                                $msg="Saya ingin bertanya tentang genset portable ". (isset($row['title']) ? $row['title'] : "-");
                                            ?>
                                              <a style="color:white" class="btn btn-success btn-md" href="https://api.whatsapp.com/send?phone=<?php echo $nomor . "&text=".$msg;?>" target="_blank" style="color:white">Info</a>
                                            </span>
                                                                                                 

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    <?php } else if ($menu_active == "services") { ?>
        <div class="container" style="background-color: white;">
            <?php if (count($data_service) > 0) {
                $x = 1;
                foreach ($data_service as $row) {
                    if ($x % 2 == 0) { //genap 
            ?>
                        <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                            <div class="col-md-6 col-lg-6 col-xs-12" style="margin-top: 10%">

                                <h4 align="right" style="border-bottom:1px solid #333333; padding-bottom:10px;margin-right:10px;"><?php echo $row['title']; ?></h4>

                                <div style="text-align:right; margin-right:10px"> <?php $description =  $row['description'];
                                                                                    echo $description; ?> </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xs-12">
                                <div class="hover_image_service_box">
                                    <img class="img_services bttrlazyloading" src="<?php echo base_url() . "assets/admin/upload/service/" . $row['img_path']; ?>" alt="<?php echo $row['meta_title'] ?>">
                                </div>
                            </div>
                        </div>

                    <?php     } else { //ganjl 
                    ?>
                        <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                            <div class="col-md-6 col-lg-6 col-xs-12">
                                <div class="hover_image_service_box">
                                    <img class="img_services bttrlazyloading" src="<?php echo base_url() . "assets/admin/upload/service/" . $row['img_path']; ?>" alt="<?php echo $row['meta_title'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xs-12" style="margin-top: 10%">
                                <h4 style="border-bottom:1px solid #333333; padding-bottom:10px;margin-right:10px;"><?php echo $row['title']; ?></h4>

                                <p> <?php $description = $row['description'];
                                    echo $description; ?> </p>
                            </div>
                        </div>
            <?php    }
                    $x++;
                }
            } ?>


        </div>
    <?php } else if ($menu_active == "clients") { ?>
        <div class="container" style="background-color: white;">
            <?php if (count($data_client) > 0) {
                $style = "col-lg-12 col-md-12 col-12 ";
                if (count($data_client) <= 20) {
                    $style = "col-lg-12 col-md-12 col-12 ";
                } else if (count($data_client) > 20 && count($data_client) <= 40) {
                    $style = "col-lg-6 col-md-6 col-6 ";
                } else if (count($data_client) > 40 && count($data_client) <= 60) {
                    $style = "col-lg-4 col-md-4 col-4 ";
                } else if (count($data_client) > 60 && count($data_client) <= 80) {
                    $style = "col-lg-3 col-md-3 col-3 ";
                }
            ?>
                <div class="row" style="margin-top:30px;margin-bottom:30px">

                    <div class="<?php echo  $style; ?>">
                        <?php $x = 1;
                        foreach ($data_client as $client) { ?>
                        
                            <!-- <img style=" display:block;margin:auto"  width="150" src="<?php echo $path_image . $client['logo_path']; ?>" alt="<?php echo $client['alt'] ?>">
                            <br> -->
                            <h5><?php echo $client['title'] ?></h5>
                            <?php if ($x % 20 == 0) { ?>
                    </div>
                    <div class="<?php echo  $style; ?>">
                <?php  }
                            $x++;
                        } ?>
                    </div>


                </div>
                <div class="row" style="margin-top:30px;margin-bottom:30px">
                    <?php
                    foreach ($data_client as $client) {
                         if($client['img_path']!=""){ ?>
                        <div class="col-lg-2 col-md-2 col-4 ">
                        <div class="imglistclient img-fluid img-thumbnail" data-img="<?php echo $path_image . $client['img_path']; ?>" style="background-image: url('<?php echo $path_image . $client['img_path']; ?>');display:block"></div>
                            <!-- <img style=" display:none"  src="<?php echo $path_image . $client['img_path']; ?>" alt="<?php echo $client['alt'] ?>"> -->

                        </div>
                    <?php

                   } } ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</section>
<?php $this->load->view("front/modal/zoom_image_modal"); ?>