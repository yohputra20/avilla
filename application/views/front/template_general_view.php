<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url(); ?>assets/front/img/icon_tab_browser.png">

  <title>Blair Townsend Studio</title>

  <link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/front/css/slick-theme.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/owl.theme.default.min.css">
  <link href="<?php echo base_url(); ?>assets/front/css/blair.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/front/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

  <!----------------------------------------- MODAL SUCCESS CONTACT US ----------------------->
  <?php $this->load->view('front/modal/success_contactus_modal'); ?>

  <!-----------------------------------------HEADER------------------------------------------->
  <?php $this->load->view('front/header_general_view'); ?>

  <!-----------------------------------------CONTENT----------------------------- ------------>
  <div id="startchange">
    <?php $this->load->view($view_content); ?>
  </div>

  <!-----------------------------------------FOOTER------------------------------------------->
  <?php $this->load->view('front/footer_general_view'); ?>


  <?php if ($is_home == true) { ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/front/js/slick.min.js"></script>
    <script>
      $(document).ready(function() {
        var count_limit_news = $('.limit_news').val();
        var count_data_news = "<?php echo $count_data_news; ?>";
        var count_data_comissions = '<?php echo $count_data_commisions; ?>';
        var count_limit_comissions = $('.limit_comissions').val();
        if (parseInt(count_data_news) <= parseInt(count_limit_news)) {
          $(".btn_loadmore_news").css("display", "none");
        }
        if (parseInt(count_data_comissions) <= parseInt(count_limit_comissions)) {
          $(".btn_loadmore_comissions").css("display", "none");
        }
        $('.carousel_gallery').slick({
          //centerMode: true,
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 3,
          prevArrow: '<span class="prev"><i class="fa fa-angle-left fa-4x" aria-hidden="true" style="color:white;"></i></span>',
          nextArrow: '<span class="next"><i class="fa fa-angle-right fa-4x" aria-hidden="true" style="color:white;"></i></span>',

          responsive: [{
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            }
          ]
        });
      });

      function loadmore_news() {
        var limit_news = $('.limit_news').val();
        var start_news = $('.start_news').val();
        var total_count = parseInt(limit_news) + parseInt(start_news);

        $(".loading_shimmer_news").css("display", "block");
        $(".btn_loadmore_news").css("display", "none");
        setTimeout(function() {
          $.ajax({
            url: "<?php echo base_url(); ?>home/load_more_news",
            method: "POST",
            data: {
              limit_news: limit_news,
              start_news: total_count
            },
            cache: false,
            beforeSend: function() {
              $(".loading_shimmer_news").css("display", "block");
            },
            success: function(msg) {

              var jsonObject = JSON.parse(msg);

              if (jsonObject.status == "1") {
                $(".loading_shimmer_news").css("display", "none");
                $('.start_news').val(jsonObject.data_.start_news);
                $('.box_news_ajax').append(jsonObject.data_.data_news);
                $(".btn_loadmore_news").css("display", "block");
              } else {
                $(".loading_shimmer_news").css("display", "none");
                //$(".btn_loadmore_news").css("display", "block");
              }

              if (jsonObject.data_.count_data == "1") {
                $(".btn_loadmore_news").css("display", "block");
              } else {
                $(".btn_loadmore_news").css("display", "none");
              }
            },
            error: function(xhr, status, error) {
              var errorMessage = xhr.status + ': ' + xhr.statusText
              console.log("on error load more news " + errorMessage);
              $(".loading_shimmer_news").css("display", "none");
              $(".btn_loadmore_news").css("display", "block");
              return false;
            }
          });
        }, 2000);
      }

      function loadmore_comissions() {
        var limit_comissions = $('.limit_comissions').val();
        var start_comissions = $('.start_comissions').val();
        var total_count = parseInt(limit_comissions) + parseInt(start_comissions);

        $(".loading_shimmer_comissions").css("display", "block");
        $(".btn_loadmore_comissions").css("display", "none");
        setTimeout(function() {

          $.ajax({
            url: "<?php echo base_url(); ?>home/load_more_comissions",
            method: "POST",
            data: {
              limit_comissions: limit_comissions,
              start_comissions: total_count
            },
            cache: false,
            beforeSend: function() {
              $(".loading_shimmer_comissions").css("display", "block");


            },
            success: function(msg) {

              var jsonObject = JSON.parse(msg);

              if (jsonObject.status == "1") {
                $(".loading_shimmer_comissions").css("display", "none");
                $('.start_comissions').val(jsonObject.data_.start_comissions);
                $('.box_comissions_ajax').append(jsonObject.data_.data_comissions);
                $(".btn_loadmore_comissions").css("display", "block");
              } else {
                $(".loading_shimmer_comissions").css("display", "none");
                //$(".btn_loadmore_comissions").css("display", "block");
              }
              if (jsonObject.data_.count_data == "1") {
                $(".btn_loadmore_comissions").css("display", "block");
              } else {
                $(".btn_loadmore_comissions").css("display", "none");
              }
            },
            error: function(xhr, status, error) {
              var errorMessage = xhr.status + ': ' + xhr.statusText
              console.log("on error load more news " + errorMessage);
              $(".loading_shimmer_comissions").css("display", "none");
              $(".btn_loadmore_comissions").css("display", "block");
              return false;
            }
          });
        }, 2000);
      }
    </script>
  <?php } ?>


  <?php if ($is_detail == true) { ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#myCarousel').carousel({
          interval: false
        });

        $('[id^=carousel-selector-]').click(function() {

          var id = this.id.substr(this.id.lastIndexOf("-") + 1);
          var id = parseInt(id);
          console.log("id thumbnail " + id);

          $('.thumbnail_commissions').css("border", "0px solid transparent");
          $('#carousel-selector-' + id).css("border", "4px solid #00A8FF");
          $('#myCarousel').carousel(id);
        });


        $('#myCarousel').on('slid.bs.carousel', function(e) {
          
          var slideFrom = $(this).find('.active').index();
          console.log("Data Slide " + slideFrom);
          $('.thumbnail_commissions').css("border", "0px solid transparent");
          $('#carousel-selector-' + slideFrom).css("border", "4px solid #00A8FF");
          $('#carousel-selector-mobile-' + slideFrom).css("border", "4px solid #00A8FF");

          $('#carousel-text').html($('#slide-content-' + slideFrom).html());

          var countminslide = parseInt(slideFrom) - 1;
          console.log("Data Slide countminslide " + countminslide);
          $(".indicator-mobile").removeClass("active");
          $("#carousel-indicator-mobile-"+slideFrom).addClass("active");
          
        });



        //FOR MOBILE CAROUSEL
        $('[id^=carousel-selector-mobile-]').click(function() {

          var id = this.id.substr(this.id.lastIndexOf("-") + 1);
          var id = parseInt(id);
          console.log("id thumbnail " + id);

          $('.thumbnail_commissions').css("border", "0px solid transparent");
          $('#carousel-selector-mobile-' + id).css("border", "4px solid #00A8FF");
          $('#myCarousel').carousel(id);
        });


        
      });
    </script>

    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src='<?php echo base_url(); ?>assets/front/js/jquery.zoom.js'></script>
    <script src="<?php echo base_url() ?>assets/front/js/owl.carousel.min.js"></script>
    <script>
      var j = jQuery.noConflict();
      j(document).ready(function() {
        j('.ex1').zoom();

        j('.carousel_all').owlCarousel({
          stagePadding: 0,
          autoplay: false,
          singleItem: true,
          lazyLoad: true,
          loop: true,
          margin: 30,
          dots: false,
          /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
          responsiveClass: true,
          navText: ['<img src="<?php echo base_url()?>assets/front/img/left_arrow_owl_all.png">',
            '<img src="<?php echo base_url()?>assets/front/img/right_arrow_owl_all.png">'
          ],
          autoHeight: false,
          autoplayTimeout: 7000,
          smartSpeed: 800,
          nav: true,
          responsive: {
            0: {
              items: 2
            },

            600: {
              items: 2
            },

            1024: {
              // margin:50,
              items: 3
            },
            1100: {
              margin:80,
              items: 3
            },
            // 1366: {
            //   margin:120,
            //   items: 3
            // }
          }
        });
        
        

      });
    </script>


  <?php } ?>

  <script>
    var base_url = '<?php echo base_url(); ?>';
  </script>
  <script src="<?php echo base_url(); ?>assets/front/js/front.js"></script>

</body>

</html>