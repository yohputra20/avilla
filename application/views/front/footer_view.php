 <!-- Start Footer -->
 <footer id="footer" class="wow fadeIn">
     <!-- Footer Top -->
     <div class="footer-top">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 col-sm-4 col-xs-4 ">

                     <div class="row">
                         <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                             <h4 class="titlefooter">Powered By</h4>
                             <hr class="linefotter">
                         </div>
                     </div>
                     <div class="row">
                         <?php foreach ($data_produk_spesifikasi as $row) { ?>
                         <div class="col-md-4 col-sm-4 col-xs-4 text-left" style="margin-top:10px;">
                             <a href="<?php echo base_url(); ?>">

                                 <?php if ($row['path_logo'] != "") { ?>
                                 <img class="imglogofooter"
                                     src="<?php echo base_url() . "assets/admin/upload/product/" . $row['path_logo']; ?>"
                                     style="width: 170px;"
                                     alt="<?php if (isset($row['meta_title'])) {
                                                                                                                                                        }; ?>">
                                 <?php } else { ?>
                                 <img class="imglogofooter"
                                     src="<?php echo base_url() . "assets/front/images/no_image.png"; ?>"
                                     style="width: 170px;"
                                     alt="<?php if (isset($row['meta_title'])) {
                                                                                                                                                echo $row['meta_title'];
                                                                                                                                            }; ?>">
                                 <?php } ?>
                             </a>
                         </div>
                         <?php } ?>

                     </div>
                 </div>

                 <div class="col-md-4 col-sm-4 col-xs-4 ">
                     <div class="row">
                         <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                             <h4 class="titlefooter">Contact Us</h4>
                             <hr class="linefotter">
                         </div>
                     </div>
                     <div class="logo">
                         <a href="<?php echo base_url(); ?>">
                             <img class="imglogofooter" src="<?php echo base_url(); ?>assets/admin/img/logo_front.png"
                                 style="width: 170px;" />
                         </a>

                     </div>
                     <ul class="social">
                         <li><a target="_blank" title="Instagram PT Avilla Jaya Teknik"
                                 href="https://www.instagram.com/avillapower/?igshid=xixzaweoyhyk"><i
                                     class="fa fa-instagram" style="font-size:30px;"></i></a></li>
                     </ul>
                 </div>

                 <div class="col-md-4 col-sm-4 col-xs-4 ">
                     <div class="row">
                         <div class="col-md-12 col-sm-12 col-xs-12 text-left">
                             <h4 class="titlefooter">Menu</h4>
                             <hr class="linefotter">
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-4 col-sm-4 col-xs-4 text-left">
                             <ul class="no-bullets">
                                 <li><a href="<?php echo base_url();?>">Home</a></li>
                                 <li><a href="<?php echo base_url();?>#about-us">About</a></li>
                                 <li><a href="<?php echo base_url();?>#product">Product</a></li>
                                 <li><a href="<?php echo base_url();?>#service">Service</a></li>
                                 <li><a href="<?php echo base_url();?>#clients">Client</a></li>
                                 <li><a href="<?php echo base_url();?>#contact">Contact Us</a></li>
                             </ul>
                         </div>
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