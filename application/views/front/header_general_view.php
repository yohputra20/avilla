<nav class="navbar navbar-default nav-transparent navbar-fixed-top">
    <div class="container">

        <!-- JIKA HALAMAN DETAIL -->
        <?php if ($is_detail == true) { ?>
            <div class="nav navbar-nav navbar-left logo_for_detail_web" style="padding-top: 2px;">
                <a class="navbar-logo" href="<?php echo base_url(); ?>">
                    <img id="logo" src="<?php echo base_url();?>assets/front/img/logo_white_header.png" alt="Blair Townsend Logo" height="80">
                </a>
            </div>
        <?php } ?>

        <!-- HALAMAN MENU MOBILE VIEW -->
        <div class="navbar-header">
            <div id="menuToggle">
                <img src="<?php echo base_url();?>assets/front/img/burger_menu.png" alt="close icon" width="30" onclick="showmenu('')" style="margin-top: 17px;">
                <?php if ($is_detail == true) { ?>
                    <!-- <img src="https://lh3.googleusercontent.com/-9gr-NYNyHrw/XiAr2ZrrWcI/AAAAAAAAAEI/1fcm2vywk3kvr7MdMAxB7jAuoG-zg4GqACK8BGAsYHg/s0/2020-01-16.png" alt="close icon" width="150" id="logo-mobile" style="position: absolute;right: 10%;" onclick="redirectbaseurll()"> -->
                <?php } else { ?>
                    <!-- <img src="https://lh3.googleusercontent.com/-i-SfVZ_5u_A/XiDu4vdy6oI/AAAAAAAABfE/8Y4cov3_sKEh0FmguWsWHzHpayt6kvD8gCK8BGAsYHg/s0/2020-01-16.png" alt="close icon" width="150" class="logo-front-mobile"id="logo-mobile" style="position: absolute;right: 10%;" onclick="redirectbaseurll()"> -->
                <?php } ?>

                <div id="menu" style="top: 1px;">
                    <div class="box_image">
                        <div class="boxrightblack_footer" style="height: 200px; background:rgba(0, 0, 0, 0.4);">
                            <img src="<?php echo base_url();?>assets/front/img/close_menu.png" alt="close icon" width="20" onclick="hidemenu('')" style="float: right;margin-top: 10px;margin-right: 7px;">
                        </div>
                    </div>
                    <ul class="scrollspy_mobile" style="margin-left: -40px;">
                        <?php if ($is_detail == true) { ?>
                            <li class="1"><a href="<?php echo base_url(); ?>" class="menu_mobile">HOME</a></li>
                            
                            <li class="3" <?php if ($this->uri->segment(1) == "comissions_detail") {
                                                echo "style='background: #68551B;'";
                                            } ?>><a href="<?php echo base_url(); ?>#comissions_mobile" class="menu_mobile">COMMISSIONS</a></li>
                            <li class="4" <?php if ($this->uri->segment(2) == "gallery") {
                                                echo "style='background: #68551B;'";
                                            } ?>><a href="<?php echo base_url(); ?>#gallery_mobile" class="menu_mobile">GALLERY</a></li>
                            <li class="2"><a href="<?php echo base_url(); ?>#about_mobile" class="menu_mobile">ABOUT</a></li>
                            <li class="5" <?php if ($this->uri->segment(2) == "news") {
                                                echo "style='background: #68551B;'";
                                            } ?>><a href="<?php echo base_url(); ?>#news_mobile" class="menu_mobile">NEWS</a></li>
                            <li class="6"><a href="<?php echo base_url(); ?>#get_in_touch_mobile" class="menu_mobile">REQUESTS</a></li>
                       
                       
                            <?php } else { ?>
                            <li class="1"><a href="<?php echo base_url(); ?>" onclick="hidemenu('1')" class="menu_mobile">HOME</a></li>
                           
                            <li class="3" <?php if ($this->uri->segment(1) == "comissions_detail") {
                                                echo "style='background: #68551B;'";
                                            } ?>><a href="#comissions_mobile" onclick="hidemenu('3')" class="menu_mobile">COMMISSIONS</a></li>
                            <li class="4" <?php if ($this->uri->segment(2) == "gallery") {
                                                echo "style='background: #68551B;'";
                                            } ?>><a href="#gallery_mobile" onclick="hidemenu('4')" class="menu_mobile">GALLERY</a></li>
                            <li class="2"><a href="#about_mobile" onclick="hidemenu('2')" class="menu_mobile">ABOUT</a></li>
                            <li class="5" <?php if ($this->uri->segment(2) == "news") {
                                                echo "style='background: #68551B;'";
                                            } ?>><a href="#news_mobile" onclick="hidemenu('5')" class="menu_mobile">NEWS</a></li>
                            <li class="6"><a href="#get_in_touch_mobile" onclick="hidemenu('6')" class="menu_mobile">REQUESTS</a></li>
                        <?php } ?>


                    </ul>
                </div>
            </div>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <!-- JIKA HALAMAN DETAIL -->
            <?php if ($is_detail == true) { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>" class="menu_web">HOME</a></li>
                    <li><a href="<?php echo base_url(); ?>#comissions_from_mobile" class="menu_web" <?php if ($this->uri->segment(1) == "comissions_detail") {
                                                                                            echo "style='background: transparent; color: #fff; text-decoration: underline;'";
                                                                                        } ?>>COMMISSIONS</a></li>
                    <li><a href="<?php echo base_url(); ?>#gallery_from_mobile" class="menu_web" <?php if ($this->uri->segment(2) == "gallery") {
                                                                                            echo "style='background: transparent; color: #fff; text-decoration: underline;'";
                                                                                        } ?>>GALLERY</a></li>
                    <li><a href="<?php echo base_url(); ?>#about_from_mobile" class="menu_web">ABOUT</a></li>
                    <li><a href="<?php echo base_url(); ?>#news_from_mobile" class="menu_web" <?php if ($this->uri->segment(2) == "news") {
                                                                                        echo "style='background: transparent; color: #fff; text-decoration: underline;'";
                                                                                    } ?>>NEWS</a></li>
                    <li><a href="<?php echo base_url(); ?>#get_in_touch" class="btn btn-transparent menu_web menu_web_get_touch" style="padding: 5px; border-color: white;">REQUEST</a></li>
                </ul>
            <?php } else { ?>
                <ul class="nav navbar-nav navbar-right scrollspy">
                    <li><a href="#" class="menu_web">HOME</a></li>
                    <li><a href="#comissions" class="menu_web">COMMISSIONS</a></li>
                    <li><a href="#gallery" class="menu_web">GALLERY</a></li>
                    <li><a href="#about" class="menu_web">ABOUT</a></li>
                    <li><a href="#news" class="menu_web">NEWS</a></li>
                    <li><a href="#get_in_touch" class="btn btn-transparent menu_web menu_web_get_touch" style="padding: 5px; border-color: white;">REQUESTS</a></li>
                </ul>
            <?php } ?>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<!-- floating button -->
<a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>