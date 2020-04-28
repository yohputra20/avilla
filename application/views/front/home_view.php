<div class="lh-imgbg">
  <div class="cover">
    <div class="container containertexthometop">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 imghometop text-center">
          <img src="<?php echo base_url(); ?>assets/front/img/logo_main_banner.png" alt="Blair Townsend" class="img-responsive img-logo-home" >
        </div>
      </div>
      <div class="row texthometop">
        <div class="col-md-12">
          <p class="descbanner">
          Have you been looking for a specific piece of furniture you’ve been unable to find? Do you want something unique and customized to your needs?   Turning your desires into reality is my specialty. The furniture below has already been commissioned and delivered. First, I’ll produce drawings and samples so you are absolutely certain of the final product. Then our fabricators, who have been with us for 20 plus years, construct each project using almost any material imaginable. The process is always fun and positive for everyone involved.
          </p>

        </div>

      </div>
    </div>
  </div>

</div>

<!-- <div class="section" style="background-color: #18011b;"> -->
<div class="section_content"  id="comissions_mobile">
 
 

  <!-- SECTION COMISSIONS -->
  <div class="container-fluid section_comissions_title" id="comissions_from_mobile">
   
    <center>
      <h1 class="title" id="comissions">COMMISSIONS</h1>
      <input type="hidden" name="limit_comissions" id="limit_comissions" class="limit_comissions" value="<?php echo $limit_comissions; ?>" autocomplete="off">
      <input type="hidden" name="start_comissions" id="start_comissions" class="start_comissions" value="<?php echo $start_comissions; ?>" autocomplete="off">

    </center>

  </div>

  <div class="container section_comissions_desc" >
    <!-- <div class="row row-flex box_comissions_ajax" id="comissions_mobile"> -->
    <div class="row box_comissions_ajax">
      <?php foreach ($commisions as $row) { ?>
        <!-- <div class="col-md-4 col-sm-6 col-xs-6">
          <a href="<?php echo base_url() . "comissions_detail/" . $row['id']; ?>" style="text-decoration: none;">
            <div class="content" style="padding: 5px;">
              <center>
              <img src="<?php echo base_url(); ?>assets/admin/upload/comissions/<?php echo $row['image']; ?>" alt="Blair" style="max-width:100%; max-height:250px;" class="img-responsive">
              </center>
              <div style="padding-left: 20px; padding-right:20px">
                <center class="title_item_comissions"><?php echo $row['title']; ?></center>


                <?php if (strlen($row['description']) > 110) { ?>
                  <center class="desc_item_comissions"><span class="desc_item_comissions"><?php echo substr(strip_tags($row['description']), 0, 110) . "..."; ?></span></center>
                <?php } else { ?>
                  <center class="desc_item_comissions"><span class="desc_item_comissions"><?php echo strip_tags($row['description']); ?></span></center>
                <?php } ?>

              </div>
            </div>
          </a>
        </div> -->



        <div class="col-md-4 col-sm-6 col-xs-6 margintopcardnews">
          <a href="<?php echo base_url() . "comissions_detail/" . $row['id']; ?>" style="text-decoration: none;">
            <!-- <div class=" containercardgallery" style="border-radius:5px; background: url('<?php echo base_url(); ?>assets/admin/upload/comissions/<?php echo $row['image']; ?>') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
              <div class="containeropacity_news">
              </div> -->

            <div class=" containercardcommisions">
              <div class="containeropacity_news" style="align-items: normal !important; padding:5px !important;">
                <center>
                  <img src="<?php echo base_url(); ?>assets/admin/upload/comissions/<?php echo $row['image']; ?>" alt="Blair" style="max-width:100%; max-height:250px;" class="img-responsive">
                </center>
              </div>

              <div class="containerdesc_news" style="padding-bottom: 10px;">
                <div><span class="title_item_comissions titlenews_item"><?php echo $row['title']; ?></span></div>

                <?php if (strlen($row['description']) > 110) { ?>
                  <div><span class="desc_item_comissions descnews_item"><?php echo substr(strip_tags($row['description']), 0, 110) . "..."; ?></span></div>
                <?php } else { ?>
                  <div><span class="desc_item_comissions descnews_item"><?php echo strip_tags($row['description']); ?></span></div>
                <?php } ?>

              </div>
            </div>
          </a>
        </div>

      <?php } ?>
    </div>

    <!-- SHOW MORE LOADING COMISSIONS -->
    <div class="row loading_shimmer_comissions" style="display: none;">
      <div class="col-md-12" style="margin-top:40px;">
        <center>
          <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
          </div>
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <center>
          <div style="padding: 20px" class="btn_loadmore_comissions"><button type="button" onclick="loadmore_comissions();" class="btn btn-xs buttonmore">Show More <i class="fa fa-angle-double-down" aria-hidden="true"></i></button></div>
        </center>
      </div>
    </div>
    <div id="gallery_from_mobile"></div>
  </div>


  <!-- SECTION GALLERY -->
  <div class="container-fluid section_gallery_title">
    <div class="row" >
      <div class="col-md-12" id="gallery_mobile" style="margin-top: 55px;border-top:1px solid white;">
      </div>
    </div>
    <center>
      <h1 class="title" id="gallery">GALLERY</h1>
    </center>
  </div>

  <div class="wrapper_carousel_gallery">
    <div class="row carousel_gallery">

      <?php foreach ($gallery as $row) { ?>
        <a href="<?php echo base_url() . "detail/gallery/" . $row['id']; ?>" style="text-decoration: none;">
          <div class="col-md-12 col-sm-12 col-xs-12 margintopcardnews">
            <div class=" containercardgallery" style="background: url('<?php echo base_url(); ?>assets/admin/upload/gallery/<?php echo $row['image']; ?>') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
              <div class="containeropacity_gallery">
              </div>

              <div class="containerdescgallery" style="padding:0px 20px 5px 15px;">
                <div><span class="title_item_comissions" style="color:white;"><?php echo $row['title']; ?></span></div>

                <?php if (strlen($row['description']) > 110) { ?>
                  <div><span class="desc_item_comissions" style="color:white;"><?php echo substr(strip_tags($row['description']), 0, 110) . "..."; ?></span></div>
                <?php } else { ?>
                  <div><span class="desc_item_comissions" style="color:white;"><?php echo strip_tags($row['description']); ?></span></div>
                <?php } ?>

              </div>
            </div>
          </div>
        </a>

      <?php } ?>
    </div>
    <div id="news_from_mobile"></div>
  </div>
  <!-- SECTION ABOUT -->
  <div class="container">
  <div class="row">
      <div class="col-md-12" id="about_mobile" style="margin-top: 55px;border-top:1px solid white;">
      </div>
    </div>
    <center>
      <div class="section " >
        <h1 class="title" id="about">ABOUT</h1>
      </div>
    </center>
  </div>

  <div class="col-md-9 aboutdesc_mobile" style="background-color: #68551B;">
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
          <img src='<?php echo base_url() ?>assets/front/img/about_front.png' style="width: 100%;" />
          <!-- <div style="background: url('<?php echo base_url() ?>assets/front/img/about_front.png') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;width: 100%;height: 350px;position: relative;z-index: 1;top: 2%;/*! left: 80%; */"></div> -->
          </div>
         

          <div class="col-md-12 col-sm-12 col-xs-12">
            <br>
            <h5 class="headingabout"><?php echo $about['title']; ?></h5>
            <span class="descabout"><?php echo $about['description']; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="col-md-12 aboutdesc_web" style="background-color: #68551B;margin-bottom:100px;min-height: 400px;padding-top: 60px;padding-bottom: 30px;">
    <div class="container">
      <div class="row">
       
        <div class="col-md-7">
          <h5 class="headingabout"><?php echo $about['title']; ?></h5>
          <div style="width: 80%;">
            <span class="descabout"><?php echo $about['description']; ?></span>
          </div>
          <!-- <div style="background: url('https://lh3.googleusercontent.com/-IfBIRlNJYEY/Xhy0Uc1DOxI/AAAAAAAABc0/VYdvYk6s3BQwZnj_FEKeecn1kSOEjJfCwCK8BGAsYHg/s0/2020-01-13.jpg') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;background-position: unset;width: 350px;height: 350px;position: absolute;z-index: 1;top: 16%;left: 80%;"></div> -->

        </div>
        <div class="col-md-5 aboutdesc_web">
        <img src='<?php echo base_url() ?>assets/front/img/about_front.png' style="width: 120%;" />
    <!-- <div style="margin-left: 40px;height: 306px;width: 300px;background: url('https://lh3.googleusercontent.com/-YklE8fQX8IM/XiEj9a2r_PI/AAAAAAAABfQ/o-AnvO5orgw4CC_--ie6t-azxQtIE5OHgCK8BGAsYHg/s0/2020-01-16.png') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;/* background-position: unset; */float: right;position: absolute;/* right: 200px; */z-index: 2;"></div> -->
  </div>
      </div>
    </div>
   
  </div>



  <!-- SECTION NEWS -->
  <div class="container-fluid section_news_title">
    <div class="row">
      <div class="col-md-12" id="news_mobile" style="margin-top: 55px;border-top:1px solid white;">
      </div>
    </div>
    <center>
      <h1 class="title" id="news">NEWS</h1>
      <input type="hidden" name="limit_news" id="limit_news" class="limit_news" value="<?php echo $limit_news; ?>" autocomplete="off">
      <input type="hidden" name="start_news" id="start_news" class="start_news" value="<?php echo $start_news; ?>" autocomplete="off">
    </center>
  </div>



  <div class="container section_news_desc">
    <!-- <div class="row row-flex box_news_ajax" id="news_mobile"> -->
    <div class="row box_news_ajax">
      <?php foreach ($news as $row) { ?>
        <!-- <div class="col-md-4 col-sm-6 col-xs-6">
          <a href="<?php echo base_url() . "detail/news/" . $row['id']; ?>" style="text-decoration: none;">
            <div class="content">
              <center><img src="<?php echo base_url() . 'assets/admin/upload/news/' . $row['image']; ?>" alt="Blair" style="width:80%;" class="img-responsive"></center>
              <div style="padding:10px 10px 5px 10px;">
                <span class="title_item_comissions titlenews_item"><?php echo $row['title']; ?></span>

                <?php if (strlen($row['description']) > 40) { ?>
                  <span class="desc_item_comissions descnews_item"><?php echo substr(strip_tags($row['description']), 0, 110) . "..."; ?></span>
                <?php } else { ?>
                  <span class="desc_item_comissions descnews_item"><?php echo $row['description']; ?></span>
                <?php } ?>
              </div>
            </div>
          </a>
        </div> -->

        <div class="col-md-4 col-sm-6 col-xs-6 margintopcardnews">
          <a href="<?php echo base_url() . "detail/news/" . $row['id']; ?>" style="text-decoration: none;">
            <div class=" containercardgallery" style="border-radius:5px; background: url('<?php echo base_url() . 'assets/admin/upload/news/' . $row['image']; ?>') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
              <div class="containeropacity_news">
              </div>

              <div class="containerdesc_news" style="padding-bottom: 10px;">
                <div><span class="title_item_comissions titlenews_item"><?php echo $row['title']; ?></span></div>

                <?php if (strlen($row['description']) > 110) { ?>
                  <div><span class="desc_item_comissions descnews_item"><?php echo substr(strip_tags($row['description']), 0, 110) . "..."; ?></span></div>
                <?php } else { ?>
                  <div><span class="desc_item_comissions descnews_item"><?php echo strip_tags($row['description']); ?></span></div>
                <?php } ?>

              </div>
            </div>
          </a>
        </div>

      <?php } ?>

    </div>
    <!-- SHOW MORE LOADING NEWS -->
    <div class="row loading_shimmer_news" style="display: none;">
      <div class="col-md-12">
        <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <center>
          <div style="padding: 20px" class="btn_loadmore_news"><button type="button" onclick="loadmore_news();" class="btn btn-xs buttonmore">Show More <i class="fa fa-angle-double-down" aria-hidden="true"></i></button></div>
        </center>
      </div>
    </div>
  </div>

</div>