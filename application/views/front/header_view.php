  <!-- Start Header -->
  <header id="header">
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
                                  <li <?php if($menu_active == "home") {echo 'class="active"';}?>><a href="<?php echo base_url();?>">Home</a>
                                  </li>
                                  <li <?php if($menu_active == "services") {echo 'class="active"';}?>><a href="<?php echo base_url();?>#service">Services</a></li>
                                  <li <?php if($menu_active == "product") {echo 'class="active"';}?>><a href="<?php echo base_url();?>#portfolio">Product</a></li>
                                  <li <?php if($menu_active == "client") {echo 'class="active"';}?>><a href="<?php echo base_url();?>#clients">Client</a></li>
                                  <li><a href="<?php echo base_url();?>#about-us">About</a>
                                  </li>
                                  <li><a href="<?php echo base_url();?>#contact">Contact</a></li>
                              </ul>
                          </div>
                      </nav>
                      <!--/ End Main Menu -->
                  </div>
              </div>

          </div>
      </div>
  </header>
  <!--/ End Header -->