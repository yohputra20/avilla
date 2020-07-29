  <!-- Start Header -->
  <header id="header" class="header" style="padding-bottom:0;border-bottom:#919191;">
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-sm-12 col-xs-12">
                  <!-- Logo -->
                  <div class="logo" style="margin-top:0px;">
                      <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/admin/img/logo_front.png" style="width: 170px;" /></a>
                  </div>
                  <!--/ End Logo -->
              </div>
              <div class="col-md-8 col-sm-12 col-xs-12">
                  <div class="nav-area">
                      <!-- Main Menu -->
                      <nav class="mainmenu">
                          <div class="mobile-nav"></div>
                          <div class="collapse navbar-collapse">
                              <ul class="nav navbar-nav menu">
                                  <li <?php if ($menu_active == "home") {
                                            echo 'class="active"';
                                        } ?>><a href="<?php echo base_url(); ?>">Home</a>
                                  </li>
                                  <li><a href="<?php echo base_url(); ?>#about-us">About Us</a>

                                  <li <?php if ($menu_active == "product") {
                                            echo 'class="active dropdown"';
                                        } ?>>

                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Product
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="<?php echo base_url(); ?>detail-produk/product/genset">Heavy Duty
                                              Genset</a>
                                          <a class="dropdown-item" href="<?php echo base_url(); ?>detail-produk/product/portable-genset">Portable
                                              Genset</a>

                                      </div>
                                  </li>
                                  <li <?php if ($menu_active == "services") {
                                            echo 'class="active"';
                                        } ?>><a href="<?php echo base_url(); ?>#service">Service</a></li>
                                  <li <?php if ($menu_active == "client") {
                                            echo 'class="active"';
                                        } ?>><a href="<?php echo base_url(); ?>#clients">Client</a></li>

                                  </li>
                                  <li><a href="<?php echo base_url(); ?>#contact">Contact Us</a></li>
                              </ul>
                          </div>
                      </nav>
                      <!--/ End Main Menu -->
                  </div>
              </div>
          </div>
      </div>
      <?php
                if (isset($data_contactus[0]['telp']) &&  $data_contactus[0]['telp'] != '') {
                   
                    $telplink = "+62" . substr($data_contactus[0]['telp'], 1);
                    $telp = substr($data_contactus[0]['telp'], 0, 3) . "-" . substr($data_contactus[0]['telp'], 3);
                }else{
                    $telp = "021-52394859";
                    $telplink = "+622152394859";
                }
 
                if (isset($data_contactus[0]['whatsapp']) &&  $data_contactus[0]['whatsapp'] != '') {
                    $whatsappsend = "62" . substr($data_contactus[0]['whatsapp'], 1);

                    $whatsappshow = substr($data_contactus[0]['whatsapp'], 0, 4) . "-" . substr($data_contactus[0]['whatsapp'], 4, 4) . "-" . substr($data_contactus[0]['whatsapp'], 8);
                }else{
                    $whatsappshow = "0813-9041-1533";
                    $whatsappsend = "6281390411533";
                }
           
                ?>
      <div class="row" style="background-color:#919191; color:white;border-bottom:#919191; margin:0;">
          <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="container">
                  <div class="row">
                      <div class="col-12 text-right desktop">
                          KLIK HUBUNGI &nbsp;&nbsp;&nbsp;
                          <i class="fa fa-phone"></i> <a href="tel:<?php echo  $telplink ;?>" class="linkmenukontak"> <?php echo $telp; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <i class="fa fa-phone"></i>&nbsp;<i class="fa fa-whatsapp"></i> <a target="_blank" class="linkmenukontak" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappsend; ?>&text=Saya%20ingin%20bertanya%20tentang"><?php echo $whatsappshow; ?></a>
                      </div>
                  </div>
              </div>

              <div class="container">
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 text-center mobile">
                          <div class="row no-gutters">
                              <div class="col-xs-4 col-sm-4">
                                  KLIK HUBUNGI 
                              </div>
                            
                              <div class="col-xs-8 col-sm-8">
                  
             

                                  <i class="fa fa-phone"></i><a href="tel:<?php echo  $telplink ;?>" class="linkmenukontak"> <?php echo $telp; ?></a><br>
                                  <i class="fa fa-phone"></i>&nbsp;<i class="fa fa-whatsapp"></i> <a target="_blank" class="linkmenukontak" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappsend; ?>&text=Saya%20ingin%20bertanya%20tentang"><?php echo $whatsappshow; ?></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>
  </header>



  <!--/ End Header -->