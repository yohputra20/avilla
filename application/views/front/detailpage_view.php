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
            <div class="col-md-8 col-sm-12 col-xs-12">
                <!-- Single blog -->
                <div class="single-blog">
                    <div class="blog-head">
                        <img src="<?php echo $path_image.$data_detail['img_path']; ?>" alt="<?php if(isset($data_detail['meta_title'])){echo $data_detail['meta_title'];}else {$data_detail['alt'];}; ?>">
                    </div>
                    <div class="blog-content">
                        <h2><a href="blog-single.html"><?php echo $data_detail['title']; ?></a></h2>
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
</section>