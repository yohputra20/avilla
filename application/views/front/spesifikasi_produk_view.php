<!-- Start Breadcrumbs -->
<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title_content; ?></h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="#"><?php echo $title_content; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Start blog -->
<section id="blog" class="single section page">
    <div class="container" style="background-color: white;">
        <div class="row" style="padding-top: 20px;">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <!-- Single blog -->
                <!-- <div class="single-blog">
                    <div class="blog-head"> -->
                        <img src="<?php echo $path_image.$data_detail['img_path']; ?>"
                            alt="<?php if(isset($data_detail['meta_title'])){echo $data_detail['meta_title'];}else {$data_detail['alt'];}; ?>">
                    <!-- </div>

                </div> -->
                <!--/ End Single blog -->

            </div>


            <div class="col-md-7 col-sm-12 col-xs-12">
                <!-- Single blog -->
                <!-- <div class="single-blog">
                    <div class="blog-content"> -->
                        <h2><?php echo $data_spesifikasi['title']; ?></h2>
                        <div class="meta">
                            <span><i class="fa fa-calender"></i><?php echo $data_detail['modifiedDate']; ?></span>
                        </div>
                        <?php echo $data_spesifikasi['desc']; ?>
                    <!-- </div>
                </div> -->
                <!--/ End Single blog -->

            </div>

        </div>
    
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- <div class="single-blog"> -->
                    <div class="col-md-10 col-sm-6 col-xs-6 text-right" style="padding-top:40px;">
                        <h5>Powered By</h5>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6" style="margin-bottom:20px;">
                        <?php if($data_spesifikasi['logo']!= "") { ?>
                            <center><img src="<?php echo $data_spesifikasi['logo']; ?>"
                            alt="<?php if(isset($data_sub_detail[0]['meta_title'])){echo $data_spesifikasi['logo'];}else {$data_spesifikasi['title'];}; ?>" width="100"></center>
                        <?php } else { ?>
                        <img src="<?php echo base_url()."assets/front/images/no_image.png"; ?>"
                            alt="<?php if(isset($data_sub_detail[0]['meta_title'])){echo $data_sub_detail[0]['meta_title'];}else {$data_sub_detail[0]['title'];}; ?>">
                        <?php } ?>

                    </div>
                    <div class="blog-content">
<?php $opentype=$data_spesifikasi['opentype'];
        $silenttype=$data_spesifikasi['silenttype'];
        $productspec=$data_spesifikasi['productspec'];
        ?>
                    <!-- <div class="table-responsive"> -->
                        <table class="table table-bordered responsive nowrap" style="text-align:center;font-size:smaller" id="dataTabledetailproductspec" width="100%" cellspacing="1">
                            <thead style="text-align:center;    background-color: aliceblue;">
                                <tr>
                                    <th style="text-align:center;" rowspan="4">No</th>
                                    <th style="text-align:center;" rowspan="4">Model</th>
                                    <th style="text-align:center;" rowspan="4">Engine</th>

                                    <th style="text-align:center;" colspan="4">Output</th>

                                    <th style="text-align:center;" rowspan="4"> 100% Load Fuel<br> Consumption (L/h)</th>
                                    <?php if ($opentype == 1) {?>
                                    <th style="text-align:center;" colspan="4" rowspan="2"> OPEN TYPE</th>
                                    <?php }?>
                                     <?php if ($silenttype == 1) {?>
                                    <th style="text-align:center;" colspan="4" rowspan="2">SILENT TYPE</th>
                                       <?php }?>
                                </tr>
                                 <tr>
                                    <th style="text-align:center;" colspan="4">400/230v-50Hz/1500rpm</th>
                                </tr>
                                 <tr>
                                    <th style="text-align:center;" colspan="2">KVA</th>
                                    <th style="text-align:center;" colspan="2">KW</th>
                                        <?php if ($opentype == 1) {?>
                                    <th style="text-align:center;" colspan="3">LxWxH(mm)</th>
                                     <th style="text-align:center;" rowspan="2"> Weight*  (Kg)</th>
                                        <?php }?>
                                     <?php if ($silenttype == 1) {?>
                                    <th style="text-align:center;" colspan="3">LxWxH(mm)</th>
                                    <th style="text-align:center;" rowspan="2"> Weight*  (Kg)</th>
                                     <?php }?>
                                </tr>
                                 <tr>
                                    <th style="text-align:center;" >PRP</th>
                                    <th style="text-align:center;" >ESP</th>
                                    <th style="text-align:center;" >PRP</th>
                                    <th style="text-align:center;" >ESP</th>
                                    <?php if ($opentype == 1) {?>
                                    <th style="text-align:center;" >L</th>
                                    <th style="text-align:center;" >W</th>
                                    <th style="text-align:center;">H</th>
                                    <?php }?>
                                     <?php if ($silenttype == 1) {?>
                                    <th style="text-align:center;" >L</th>
                                    <th style="text-align:center;" >W</th>
                                    <th style="text-align:center;">H</th>
                                      <?php }?>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                            <?php 
                            
                            
                            if(sizeof($productspec)>0){ 
                                $n=1;
                                foreach($productspec as $ps){ ?>

                                <tr>
                                    <td><?php echo $n; ?></td>
                                    <td><?php echo $ps['model']; ?></td>
                                    <td><?php echo $ps['engine']; ?></td>

                                    <td><?php echo $ps['outputKvaPrp']; ?></td>
                                    <td><?php echo $ps['outputKvaEsp']; ?></td>
                                    <td><?php echo $ps['outputKwPrp']; ?></td>
                                    <td><?php echo $ps['outputKwEsp']; ?></td>

                                      <td><?php echo $ps['loadFuel']; ?></td>
                                     <?php if ($opentype == 1) {?>
                                    <td><?php echo $ps['ot_l']; ?></td>
                                    <td><?php echo $ps['ot_w']; ?></td>
                                    <td><?php echo $ps['ot_h']; ?></td>
                                    <td><?php echo $ps['ot_weight']; ?></td>
                                     <?php }?>
                                     <?php if ($silenttype == 1) {?>
                                     <td><?php echo $ps['st_l']; ?></td>
                                    <td><?php echo $ps['st_w']; ?></td>
                                    <td><?php echo $ps['st_h']; ?></td>
                                    <td><?php echo $ps['st_weight']; ?></td>
                                      <?php }?>
                                </tr>
                                  <?php $n++;   }
                            } ?>
                            </tbody>
                        </table>
                    <!-- </div> -->


                        
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

</section>