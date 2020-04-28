<!-- <div class="section" style="background-color: #18011b;"> -->
<div style="background-color: #18011b;padding-top: 70px; padding-bottom: 70px;">
  <div class="container" style="margin-top: 50px;">
    <!-- Slider -->

    <div class="row back-detail" style="margin-bottom: 10px">
          <div class="col-sm-2">
           
          <button onclick="goBack()" class="btn btn-default back-front" style="display:none"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back</button>
          
             
          
          </div>
        </div>
    <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <div class="col-md-12">
          <?php if ($type == "gallery") { ?>
            <div>

              <h1 class="titlecomission"><?php echo ucfirst($detail_gallery['title']); ?></h1>

            </div>
            <br><br><br>
          <?php } else { ?>
            <div>

              <h1 class="titlecomission"><?php echo ucfirst($detall_news['title']); ?></h1>
              <span style="color: white;text-align:left;font-style: italic;">BlairTownsend - <?php echo $post_date; ?>, <?php echo $post_time; ?></span>

            </div>

            <br><br><br>
          <?php } ?>
        </div>

      </div>
      <div class="col-xs-12" id="slider">
        <!-- Top part of the slider -->
        <div class="row">
          <div class="col-sm-12" id="carousel-bounding-box">

            <div class="carousel slide" id="myCarousel">
              <!-- Carousel items -->
              <div class="carousel-inner">

                <div class="active item" data-slide-number="0">
                  <center>
                    <?php if ($type == "gallery") { ?>
                      <img src='<?php echo base_url(); ?>assets/admin/upload/gallery/<?php echo $detail_gallery['image']; ?>' class="img_detail_"/>
                    <?php } else { ?>
                      <img src='<?php echo base_url(); ?>assets/admin/upload/news/<?php echo $detall_news['image']; ?>' class="img_detail_" />
                    <?php } ?>

                  </center>
                </div>

              </div>


            </div>
          </div>

          <!--  <div class="col-sm-5">

            <?php if ($type == "gallery") { ?>

              <div class="desccomission"><?php echo $detail_gallery['description']; ?></div>
            <?php } else { ?>

              <div class="desccomission"><?php echo $detall_news['description']; ?></div>
            <?php } ?>

          </div> -->

        </div>
      </div>


      <div class="col-xs-12">
        <br><br>
        <?php if ($type == "gallery") { ?>

          <div class="desccomission" style="text-align: justify;"><?php echo $detail_gallery['description']; ?></div>
        <?php } else { ?>

          <div class="desccomission" style="text-align: justify;"><?php echo $detall_news['description']; ?></div>
        <?php } ?>
      </div>

    </div>
    <!--/Slider-->
  </div>

  <!-- SECTION RELATED WORK -->
  <div class="container-fluid section_comissions_title">
    <div class="row">
      <div class="col-md-12" style="margin-top: 55px;border-top:1px solid white;">
      </div>
    </div>
    <h1 class="title textrelatedwork"><?php if ($type == "gallery") {
                                        echo "RELATED GALLERY";
                                      } else {
                                        echo "RELATED NEWS";
                                      } ?></h1>
    <br>
  </div>


  <?php if ($type == "gallery") { ?>
    <center>
      <div class="owl-slider section_comissions_desc">
        <div class="owl-carousel carousel_all">
          <?php foreach ($gallery_related as $row) { ?>
            <a href="<?php echo base_url() . "detail/gallery/" . $row['id']; ?>" style="text-decoration: none;">
              <div class="content" style="padding: 5px;">
                <center>
                  <img class="owl-lazy img_related_all" data-src="<?php echo base_url(); ?>assets/admin/upload/gallery/<?php echo $row['image']; ?>" alt="">

                </center>
                <div style="padding: 0px 10px 10px 10px;">
                  <span class="title_item_comissions_related descnews_item"><?php echo ucfirst($row['title']); ?></span>


                  <!-- <span class="desc_item_comissions descnews_item"><?php echo strip_tags($row['description']); ?></span> -->
                  <?php if (strlen($row['description']) > 40) { ?>
                      <span class="desc_item_comissions_related descnews_item" style="line-height: 1em;"><?php echo substr(strip_tags($row['description']), 0, 110) . "..."; ?></span>
                   
                    <?php } else { ?>
                      <span class="desc_item_comissions_related descnews_item" style="line-height: 1em;"><?php echo strip_tags($row['description']); ?></span>
                    <?php } ?>

                </div>
              </div>
            </a>
          <?php } ?>
        </div>
      </div>
    </center>
  <?php } else { ?>
    <center>
      <div class="owl-slider section_comissions_desc">
        <div class="owl-carousel carousel_all">
          <?php foreach ($news_related as $row) { ?>
            <a href="<?php echo base_url() . "detail/news/" . $row['id']; ?>" style="text-decoration: none;">
              <!-- <div class="col-md-4 col-sm-6 col-xs-6"> -->
              <div class="content" style="padding: 5px;">
                <div class="item">
                  <center>
                    <img class="owl-lazy img_related_all" data-src="<?php echo base_url(); ?>assets/admin/upload/news/<?php echo $row['image']; ?>" alt="">
                  </center>
                  <div style="padding:0px 20px 5px 15px;">
                    <span class="title_item_comissions_related descnews_item"><?php echo ucfirst($row['title']); ?></span>

                   <!--  <?php if (strlen($row['description']) > 40) { ?>
                      <span class="desc_item_comissions_related descnews_item"><?php echo substr(strip_tags($row['description']), 0, 110) . "..."; ?></span>
                   
                    <?php } else { ?>
                      <span class="desc_item_comissions_related descnews_item"><?php echo strip_tags($row['description']); ?></span>
                    <?php } ?> -->


                     <?php if (strlen($row['description']) > 110) { ?>
                      <div><span class="desc_item_comissions descnews_item"><?php echo substr(strip_tags($row['description']), 0, 110) . "..."; ?></span></div>
                    <?php } else { ?>
                      <div><span class="desc_item_comissions descnews_item"><?php echo strip_tags($row['description']); ?></span></div>
                    <?php } ?>

                  </div>
                </div>
              </div>
              <!-- </div> -->
            </a>
          <?php } ?>
        </div>
      </div>
    </center>
  <?php } ?>

</div>