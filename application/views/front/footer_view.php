 <!-- Start Footer -->
 <footer id="footer" class="wow fadeIn">
     <!-- Footer Top -->
     <div class="footer-top">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 col-sm-12 col-xs-12 " style="margin-bottom:50px">

                     <div class="row">
                         <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                             <h4 class="titlefooter">Product</h4>

                         </div>
                     </div>
                     <div class="row">
                         <?php $i = 1;
                            foreach ($data_produk_spesifikasi as $row) {

                            ?>
                             <div class="col-md-6 col-sm-6 col-xs-6 text-center" style="margin-top:10px;padding-left:0px;padding-right:0px;">
                                 <!-- <a href="<?php echo base_url(); ?>"> -->

                                 <?php if ($row['path_logo'] != "") {

                                    ?>
                                     <img class="" src="<?php echo base_url() . "assets/admin/upload/product/" . $row['path_logo']; ?>" style="height: 55px;display: block;margin-left: auto;margin-right: auto;" alt="<?php if (isset($row['meta_title'])) {
                                                                                                                                                                                                                        }; ?>">
                                 <?php } else { ?>
                                     <img class="" src="<?php echo base_url() . "assets/front/images/no_image.png"; ?>" style="width: 170px;" alt="<?php if (isset($row['meta_title'])) {
                                                                                                                                                        echo $row['meta_title'];
                                                                                                                                                    }; ?>">
                                 <?php

                                    } ?>
                                 <!-- </a> -->
                             </div>
                         <?php } ?>

                     </div>
                 </div>
                 <div class="col-md-4 col-sm-12 hidden-xs ">
                     <div class="row">
                         <div class="col-md-3 hidden-xs text-left">
                             <!-- <h4 class="titlefooter">Menu</h4> -->
                             <!-- <hr class="linefotter"> -->
                         </div>
                         <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                             <h4 class="titlefooter">Menu</h4>

                         </div>
                         <div class="col-md-3 hidden-xs text-left">
                             <!-- <h4 class="titlefooter">Menu</h4> -->
                             <!-- <hr class="linefotter"> -->
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-3 hidden-xs text-left">
                             <!-- <h4 class="titlefooter">Menu</h4> -->
                             <!-- <hr class="linefotter"> -->
                         </div>
                         <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                             <ul class="no-bullets">
                                 <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                 <li><a href="<?php echo base_url(); ?>#about-us">About</a></li>
                                 <li><a href="<?php echo base_url(); ?>#portfolio">Product</a></li>
                                 <li><a href="<?php echo base_url(); ?>#service">Service</a></li>
                                 <li><a href="<?php echo base_url(); ?>#clients">Client</a></li>
                                 <li><a href="<?php echo base_url(); ?>#contact">Contact Us</a></li>
                             </ul>
                         </div>
                         <div class="col-md-3 hidden-xs text-left">
                             <!-- <h4 class="titlefooter">Menu</h4> -->
                             <!-- <hr class="linefotter"> -->
                         </div>
                     </div>

                 </div>
                 <div class="col-md-4 col-sm-12 col-xs-12 " style="margin-bottom:30px">
                     <div class="row">
                         <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                             <h4 class="titlefooter">Follow us on Instagram</h4>
                             <!-- <hr class="linefotter"> -->
                         </div>
                     </div>
                     <ul class="social" style="margin-top:25px">
                         <li><a target="_blank" title="Instagram PT Avilla Jaya Teknik" href="https://www.instagram.com/avillapower/?igshid=xixzaweoyhyk"><i class="fa fa-instagram" style="font-size:30px;"></i></a></li>
                     </ul>
                     <div class="logo" style="margin-top:25px">
                         <a href="<?php echo base_url(); ?>">
                             <img class="imglogofooter" src="<?php echo base_url(); ?>assets/admin/img/logo_front.png" style="width: 200px;" />
                         </a>

                     </div>

                 </div>



             </div>
         </div>
     </div>
     <!--/ End Footer Top -->

     <!-- Copyright -->
     <div class="copyright">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="text">
                         <p>&copy; Copyright 2020,<span> PT Avilla Jaya Teknik.</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--/ End Copyright -->
 </footer>
 <!--/ End Footer -->