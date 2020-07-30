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
    <?php if ($menu_active == 'product') { ?>
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
                                                    <img class="imglogoproduct" src="<?php echo base_url() . "assets/admin/upload/product/" . $row['path_logo']; ?>"  alt="<?php if (isset($row['meta_title'])) {
                                                                                                                                                                        }; ?>">
                                                <?php } else { ?>
                                                    <img  class="imglogoproduct" src="<?php echo base_url() . "assets/front/images/no_image.png"; ?>" style="height:80px" alt="<?php if (isset($row['meta_title'])) {
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
                            <div class="single-blog" style="margin-top:10px;margin-bottom:10px">
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


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</section>