<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/zoomove.min.css">
<style>
  .itemzoom {
    position: relative;
    width: 500px;
    height: 500px;
  }

  .itemzoom .zoo-item {
    /*border: 1px solid #EEEEEE;*/
    /* margin: 10px; */
  }
  .descdetail p a{
    word-break: break-all;
  }
  .zoo-item .zoo-img{
    background-size:contain;
  }
</style>
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/style.css"> -->

<!-- <div class="section" style="background-color: #18011b;"> -->
<div style="background-color: #18011b;padding-top: 70px; padding-bottom: 70px;">
  <div class="container" style="margin-top: 40px;">
    <!-- Slider -->
    <div class="row">
      <div class="col-xs-12" id="slider">
        <div class="row back-detail" style="margin-bottom: 10px">
          <div class="col-sm-2">
           
              <button onclick="goBack()" class="btn btn-default back-front" style="display:none"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back</button>
          
             
          
          </div>
        </div>
        <!-- Top part of the slider -->
        <div class="row">
          <div class="col-sm-12 thumbnail_mobile" id="carousel-text">
            <div style="margin-bottom: 20px;">
              <span class="titlecomission"><?php echo $detail_commisions[0]['title']; ?></span>
            </div>
          </div>

          <div class="col-sm-6 text-left" id="carousel-bounding-box">

            <div class="carousel slide" id="myCarousel" data-interval="false">
              <!-- Carousel items -->
              <div class="carousel-inner" role="listbox">


                <div class="active item" data-slide-number="0">
                  <center>
                    <div class="zoom_for_web itemzoom">
                      <figure class="zoo-item" data-zoo-scale="2" data-zoo-image="<?php echo base_url(); ?>assets/admin/upload/comissions/<?php echo $detail_commisions[0]['image_multiple'][0]['image']; ?>"></figure>
                    </div>
                    <div class="zoom_for_mobile">
                      <img src='<?php echo base_url(); ?>assets/admin/upload/comissions/<?php echo $detail_commisions[0]['image_multiple'][0]['image']; ?>' style="width: 100%;" />
                    </div>

                  </center>
                </div>

                <?php $no = 1;
                foreach ($detail_commisions[0]['image_multiple'] as $row) { ?>
                  <?php if ($no > 1) { ?>
                    <div class="item" data-slide-number="<?php echo $no; ?>">
                      <center>
                        <div class="itemzoom zoom_for_web">
                          <figure class="zoo-item" data-zoo-scale="2" data-zoo-image="<?php echo base_url(); ?>assets/admin/upload/comissions/<?php echo $row['image'] ?>">Loading...</figure>
                        </div>
                        <div class="zoom_for_mobile">
                          <img src='<?php echo base_url(); ?>assets/admin/upload/comissions/<?php echo $row['image'] ?>' style="width: 100%;" />
                        </div>
                      </center>
                    </div>
                  <?php } ?>


                <?php $no++;
                } ?>

              </div>

              <!-- Carousel nav -->
              <?php if (sizeof($detail_commisions[0]['image_multiple']) > 1) { ?>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
                  <div class="arrow_carousel_commissions_left">
                    <img src="<?php echo base_url();?>assets/front/img/left_arrow_owl.png" width="40">

                  </div>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                  <div class="arrow_carousel_commissions_right">
                    <img src="<?php echo base_url();?>assets/front/img/right_arrow_owl.png" width="40">

                  </div>
                </a>
              <?php } ?>

            </div>
          </div>

          <div class="col-sm-1 thumbnail_web">
          </div>
          <div class="col-sm-5 thumbnail_web" id="carousel-text">
            <span class="titlecomission"><?php echo $detail_commisions[0]['title']; ?></span>
            <br>
            <div class="desccomission descdetail">
              <?php echo $detail_commisions[0]['description']; ?>
            </div>
          </div>

          <div class="col-sm-5 thumbnail_mobile" id="slider-thumbs">
            <div class="col-md-12">
            <?php if (sizeof($detail_commisions[0]['image_multiple']) > 1) { ?>
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" id="carousel-indicator-mobile-0" class="indicator-mobile active"></li>
                <?php $no = 0;
                foreach ($detail_commisions[0]['image_multiple'] as $row) { if($no > 0) { ?>
                  <li data-target="#myCarousel" data-slide-to="<?php echo $no; ?>" id="carousel-indicator-mobile-<?php echo $no; ?>" class="indicator-mobile"></li>
                <?php } $no++; } ?>
              </ol>
                <?php } ?>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--/Slider-->

    <div class="row" id="slider-thumbs">
      <div class="col-md-12 thumbnail_web" style="margin-left: -44px;">
        <ul class="hide-bullets">
          <?php $no = 0;
          foreach ($detail_commisions[0]['image_multiple'] as $row) { ?>
            <li class="col-sm-6 col-xs-6 col-md-2" style="height: 140px; margin-top: 40px;">
              <a class="thumbnail thumbnail_commissions" id="carousel-selector-<?php echo $no; ?>">
                <img src="<?php echo base_url(); ?>assets/admin/upload/comissions/<?php echo $row['image'] ?>" style="height: 140px;">
              </a>
            </li>
          <?php $no++;
          } ?>
        </ul>
      </div>
      <div class="col-sm-12 thumbnail_mobile" id="carousel-text">
        <div style="margin-top:20px;">
          <div class="desccomission descdetail">
            <?php echo $detail_commisions[0]['description']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SECTION RELATED WORK -->
  <div class="container-fluid section_comissions_title">
    <div class="row">
      <div class="col-md-12" style="margin-top: 55px;border-top:1px solid white;">
      </div>
    </div>
    <h1 class="title textrelatedwork">RELATED WORK</h1>

  </div>


  <center>
    <div class="owl-slider section_comissions_desc">
      <div class="owl-carousel carousel_all">
        <?php foreach ($comissions_related as $row) { ?>
          <a href="<?php echo base_url() . "comissions_detail/" . $row['id']; ?>" style="text-decoration: none;">
            <div class="content" style="padding: 5px;">
              <!-- <div class="item"> -->
                <center>
                  <img class="owl-lazy img_related_all" data-src="<?php echo base_url(); ?>assets/admin/upload/comissions/<?php echo $row['image']; ?>" alt="">
                </center>
                <div style="padding:0px 20px 5px 15px;">
                  <center class="title_item_comissions_related"><span class="title_item_comissions_related"><?php echo $row['title']; ?></span></center>

                  <!-- <center class="desc_item_comissions_related"><span class="desc_item_comissions"><?php echo $row['description']; ?></span></center>
 -->

                   <?php if (strlen($row['description']) > 110) { ?>
                    <center class="desc_item_comissions"><span class="desc_item_comissions"><?php echo substr(strip_tags($row['description']), 0, 110) . "..."; ?></span></center>
                  <?php } else { ?>
                    <center class="desc_item_comissions"><span class="desc_item_comissions"><?php echo strip_tags($row['description']); ?></span></center>
                  <?php } ?>
                </div>
              <!-- </div> -->
            </div>
          </a>
        <?php } ?>
      </div>
    </div>
  </center>


</div>

<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/zoomove.min.js"></script>
<script>
  $('.zoo-item').ZooMove({
    cursor: 'true',
    scale: '1.0',
  });
</script>