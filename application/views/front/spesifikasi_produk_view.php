<!-- Start Breadcrumbs -->
<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title_content; ?></h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="#"><?php echo $title_content; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Start blog -->
<section id="blog" class="single section page">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <!-- Single blog -->
                <div class="single-blog">
                    <div class="blog-head">
                        <img src="<?php echo $path_image.$data_detail['img_path']; ?>"
                            alt="<?php if(isset($data_detail['meta_title'])){echo $data_detail['meta_title'];}else {$data_detail['alt'];}; ?>">
                    </div>

                </div>
                <!--/ End Single blog -->

            </div>


            <div class="col-md-7 col-sm-12 col-xs-12">
                <!-- Single blog -->
                <div class="single-blog">
                    <div class="blog-content">
                        <h2><?php echo $data_detail['title']; ?></h2>
                        <div class="meta">
                            <span><i class="fa fa-calender"></i><?php echo $data_detail['modifiedDate']; ?></span>
                        </div>
                        <?php echo $data_detail['description']; ?>
                    </div>
                </div>
                <!--/ End Single blog -->

            </div>

        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                    <div class="col-md-10 col-sm-6 col-xs-6 text-right" style="padding-top:40px;">
                        <h5>Powered By</h5>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6" style="margin-bottom:20px;">
                        <?php if($data_sub_detail[0]['path_logo'] != "") { ?>
                            <center><img src="<?php echo base_url().$data_sub_detail[0]['path_logo']; ?>"
                            alt="<?php if(isset($data_sub_detail[0]['meta_title'])){echo $data_sub_detail[0]['meta_title'];}else {$data_sub_detail[0]['title'];}; ?>" width="100"></center>
                        <?php } else { ?>
                        <img src="<?php echo base_url()."assets/front/images/no_image.png"; ?>"
                            alt="<?php if(isset($data_sub_detail[0]['meta_title'])){echo $data_sub_detail[0]['meta_title'];}else {$data_sub_detail[0]['title'];}; ?>">
                        <?php } ?>

                    </div>
                    <div class="blog-content">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Model</th>
                                    <th>Engine</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data_spesifikasi as $row) { ?>
                                <tr>
                                    <td><?php echo $row['model']; ?></td>
                                    <td><?php echo $row['engine']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>