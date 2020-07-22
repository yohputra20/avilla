<!-- Start Breadcrumbs -->
<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title_content; ?></h2>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li class="active"><a href="#"><?php echo $title_content; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Start blog -->
<section id="blog" class="single section page">
    <div class="container" style="background-color: white;">
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <!-- Single blog -->
                <!-- <div class="single-blog">
                    <div class="blog-head"> -->
                        <img src="<?php echo $path_image.$data_detail['img_path']; ?>"
                            alt="<?php if(isset($data_detail['meta_title'])){echo $data_detail['meta_title'];}else {$data_detail['alt'];}; ?>">
                    <!-- </div>

                </div> -->
                <!--/ End Single blog -->

            </div>


            <div class="col-md-7 col-sm-12 col-xs-12">
                <!-- Single blog -->
                <!-- <div class="single-blog">
                    <div class="blog-content"> -->
                        <h2><?php echo $data_detail['title']; ?></h2>
                        <div class="meta">
                            <span><i class="fa fa-calender"></i><?php echo $data_detail['modifiedDate']; ?></span>
                        </div>
                        <?php echo $data_detail['description']; ?>
                    <!-- </div>
                </div> -->
                <!--/ End Single blog -->

            </div>

        </div>
        <!-- JIKA PRODUK GENSET -->
        <?php if($data_sub_detail[0]['product_id'] == "1") { ?>

        <div class="row">
            <?php foreach($data_sub_detail as $row) { ?>
            <a href="<?php echo base_url();?>spesifikasi-produk/<?php echo $row['id']?>">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="single-blog">
                        <div class="blog-content">
                            <center>
                                <h5><?php echo ucwords($row['title']); ?></h5>
                            </center>
                            <?php if($row['path_logo'] != "") { ?>
                            <img src="<?php echo base_url().$row['path_logo']; ?>"
                                alt="<?php if(isset($row['meta_title'])){echo $row['meta_title'];}else {$row['title'];}; ?>">
                            <?php } else { ?>
                            <img src="<?php echo base_url()."assets/front/images/no_image.png"; ?>"
                                alt="<?php if(isset($row['meta_title'])){echo $row['meta_title'];}else {$row['title'];}; ?>">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </a>
            <?php } ?>
        </div>
        <!-- JIKA PRODUK GENSET PORTABLE -->
        <?php } else { ?>
        <div class="row rowlist" style="font-size: smaller;">
            <?php foreach($data_sub_detail as $row) { ?>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="single-blog" style="height: 95%;">
                    <div class="blog-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <?php if($row['path_img'] != "") { ?>
                                <?php  if(@fclose(@fopen(base_url()."assets/admin/upload/product/".$row['path_img'],"r")) ) {  ?>
                                <img src="<?php echo base_url()."assets/admin/upload/product/".$row['path_img']; ?>"
                                    alt="<?php if(isset($row['meta_title'])){echo $row['meta_title'];}else {$row['title'];}; ?>">
                                <?php } else { ?>
                                <img src="<?php echo base_url()."assets/front/images/no_image.png"; ?>"
                                    alt="<?php if(isset($row['meta_title'])){echo $row['meta_title'];}else {$row['title'];}; ?>">
                                <?php } ?>

                                <?php } else { ?>
                                <img src="<?php echo base_url()."assets/front/images/no_image.png"; ?>"
                                    alt="<?php if(isset($row['meta_title'])){echo $row['meta_title'];}else {$row['title'];}; ?>">
                                <?php } ?>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-5">

                            <h4><?php echo (isset($row['title']) ? $row['title'] : "-");?>
                                </h4>
                                <p style="font-size: small;"><?php echo (isset($row['description']) ? $row['description'] : "-");?>
                                </p>
                                
<!-- 
                                <div class="row">
                                    <div class="col-md-6 col-sm-64 col-xs-6">
                                        <p><?php echo (isset($row['spesifikasi'][0]['outputKvaPrp']) ? $row['spesifikasi'][0]['outputKvaPrp'] : "-");?>
                                        </p>
                                        <p><?php echo (isset($row['spesifikasi'][0]['outputKvaEsp']) ? $row['spesifikasi'][0]['outputKvaEsp'] : "-");?>
                                        </p>
                                        <p><?php echo (isset($row['spesifikasi'][0]['outputKwPrp']) ? $row['spesifikasi'][0]['outputKwPrp'] : "-");?>
                                        </p>
                                        <p><?php echo (isset($row['spesifikasi'][0]['outputKwEsp']) ? $row['spesifikasi'][0]['outputKwEsp'] : "-");?>
                                        </p>
                                        <p><?php echo (isset($row['spesifikasi'][0]['loadFuel']) ? $row['spesifikasi'][0]['loadFuel'] : "-");?>
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-64 col-xs-6">
                                        <p><?php echo (isset($row['spesifikasi'][0]['ot_l']) ? $row['spesifikasi'][0]['ot_l'] : "-");?>
                                        </p>
                                        <p><?php echo (isset($row['spesifikasi'][0]['ot_w']) ? $row['spesifikasi'][0]['ot_w'] : "-");?>
                                        </p>
                                        <p><?php echo (isset($row['spesifikasi'][0]['ot_h']) ? $row['spesifikasi'][0]['ot_h'] : "-");?>
                                        </p>
                                        <p><?php echo (isset($row['spesifikasi'][0]['ot_weight']) ? $row['spesifikasi'][0]['ot_weight'] : "-");?>
                                        </p>
                                        <p><?php echo (isset($row['spesifikasi'][0]['st_l']) ? $row['spesifikasi'][0]['st_l'] : "-");?>
                                        </p>
                                    </div>
                                </div> -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>

</section>