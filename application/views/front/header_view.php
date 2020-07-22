  <!-- Start Header -->
  <header id="header" class="header" style="padding-bottom:0;border-bottom:#919191;">
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-sm-12 col-xs-12">
                  <!-- Logo -->
                  <div class="logo" style="margin-top:0px;">
                      <a href="<?php echo base_url();?>"><img
                              src="<?php echo base_url();?>assets/admin/img/logo_front.png" style="width: 170px;" /></a>
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
                                  <li <?php if($menu_active == "home") {echo 'class="active"';}?>><a
                                          href="<?php echo base_url();?>">Beranda</a>
                                  </li>
                                  <li <?php if($menu_active == "services") {echo 'class="active"';}?>><a
                                          href="<?php echo base_url();?>#service">Layanan</a></li>
                                  <li <?php if($menu_active == "product") {echo 'class="active dropdown"';}?>>

                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Produk
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item"
                                              href="<?php echo base_url();?>detail-produk/product/genset">Genset</a>
                                          <a class="dropdown-item"
                                              href="<?php echo base_url();?>detail-produk/product/portable-genset">Portable
                                              Genset</a>

                                      </div>
                                  </li>
                                  <li <?php if($menu_active == "client") {echo 'class="active"';}?>><a
                                          href="<?php echo base_url();?>#clients">Klien</a></li>
                                  <li><a href="<?php echo base_url();?>#about-us">Tentang</a>
                                  </li>
                                  <li><a href="<?php echo base_url();?>#contact">Kontak</a></li>
                              </ul>
                          </div>
                      </nav>
                      <!--/ End Main Menu -->
                  </div>
              </div>
          </div>
      </div>

      <div class="row" style="background-color:#919191; color:white;border-bottom:#919191; margin:0;">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="nav-area">
                  <!-- Main Menu -->
                  <nav class="mainmenu">
                      <!-- <div class="mobile-nav"></div> -->
                      <div>
                          <ul class="nav navbar-nav menu menukontak" style="margin:0;">
                              <div class="col-md-3 col-sm-6 col-xs-6" style="padding:0;">
                                  KLIK HUBUNGI
                              </div>
                              <div class="col-md-9 col-sm-6 col-xs-6" style="padding:0;">
                                  <div class="col-md-4 col-sm-12 col-xs-12" style="padding:0;">
                                      <i class="fa fa-phone"></i>&nbsp;<a href="tel:+622152394859"
                                          style="color:white;">021-52394859</a>
                                  </div>

                                  <div class="col-md-8 col-sm-12 col-xs-12" style="padding:0;">
                                      <i class="fa fa-whatsapp"></i>&nbsp;<a
                                          href="https://api.whatsapp.com/send?phone=6281390411533&text=Saya%20ingin%20bertanya%20tentang"
                                          target="_blank" style="color:white;">0813-9041-1533</a>
                                  </div>
                              </div>
                          </ul>
                      </div>
                  </nav>
                  <!--/ End Main Menu -->
              </div>
          </div>

      </div>
  </header>



  <!--/ End Header -->