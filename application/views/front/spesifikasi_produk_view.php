<!-- Start Breadcrumbs -->
<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title_content; ?></h2>

            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Start blog -->
<section id="blog" class="single section page">
    <div class="container" style="background-color: white;">
        <div class="row" style="padding-top: 20px;padding-bottom: 20px;">

            <div class="col-md-2  hidden-xs ">

            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 text-center">
                <img src="<?php echo $path_image . $data_detail['img_path']; ?>" alt="<?php if (isset($data_detail['meta_title'])) {
                                                                                            echo $data_detail['meta_title'];
                                                                                        } else {
                                                                                            $data_detail['alt'];
                                                                                        }; ?>">

            </div>
            <div class="col-md-2  hidden-xs ">

            </div>
        </div>
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12text-center">
                <!-- Single blog -->
                <!-- <div class="single-blog">
                    <div class="blog-content"> -->
                <!-- <h2><?php echo $data_spesifikasi['title']; ?></h2> -->

                <?php echo $data_spesifikasi['desc']; ?>
                <!-- </div>
                </div> -->
                <!--/ End Single blog -->

            </div>

        </div>
        <?php $opentype = $data_spesifikasi['opentype'];
        $silenttype = $data_spesifikasi['silenttype'];
        $productspec = $data_spesifikasi['productspec'];
        $padding = "padding-top:70px;";
        $padddingimg = "";
        if (strtolower($data_spesifikasi['title']) == 'kubota' || strtolower($data_spesifikasi['title']) == 'perkins') {
            $padding = "padding-top:50px;";
            $padddingimg = "padding-top:35px;";
        }
        ?>
        <div class="row" style="margin-top:40px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row align-items-end" style="display: flex;">
                    <div class="col-md-8 col-sm-6 col-xs-6" style="display:inline-block;align-self:flex-end">
                        <h5 style="margin-bottom:2px"><?php echo (sizeof($productspec) > 0 ? (substr($productspec[0]['model'], 0, 2) == "AP" ? 'APK' : substr($productspec[0]['model'], 0, 2)) : ''); ?> Series Specifications</h5>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-4 text-right" style="display:inline-block;align-self:flex-end">
                        <h5 style="margin-bottom:2px">Powered By</h5>
                    </div>
                    <div class="col-md-1 col-sm-2 col-xs-2 " style="padding-left:0px;display:inline-block;align-self:flex-end">
                        <?php if ($data_spesifikasi['logo'] != "") { ?>
                            <img style="max-height:50px;float:right" src="<?php echo $data_spesifikasi['logo']; ?>" alt="<?php if (isset($data_sub_detail[0]['meta_title'])) {
                                                                                                                                echo $data_sub_detail[0]['meta_title'];
                                                                                                                            } else {
                                                                                                                                $data_sub_detail[0]['meta_title'];
                                                                                                                            }; ?>">
                        <?php } else { ?>
                            <img src="<?php echo base_url() . "assets/front/images/no_image.png"; ?>" alt="<?php if (isset($data_sub_detail[0]['meta_title'])) {
                                                                                                                echo $data_sub_detail[0]['meta_title'];
                                                                                                            } else {
                                                                                                                $data_sub_detail[0]['title'];
                                                                                                            }; ?>">
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="overflow-x:auto;">
                        <table class="table table-bordered responsive nowrap" style="text-align:center;font-size:smaller" id="dataTabledetailproductspec" width="100%" cellspacing="1">
                            <thead style="text-align:center;    background-color: aliceblue;">
                                <tr>
                                    <th style="text-align:center;" rowspan="4">No</th>
                                    <th style="text-align:center;" rowspan="4">Model</th>
                                    <th style="text-align:center;" rowspan="4">Engine</th>

                                    <th style="text-align:center;" colspan="4">Output</th>

                                    <th style="text-align:center;" rowspan="4"> 100% Load Fuel<br> Consumption (L/h)</th>
                                    <?php if ($opentype == 1) { ?>
                                        <th style="text-align:center;" colspan="4" rowspan="2"> OPEN TYPE</th>
                                    <?php } ?>
                                    <?php if ($silenttype == 1) { ?>
                                        <th style="text-align:center;" colspan="4" rowspan="2">SILENT TYPE</th>
                                    <?php } ?>
                                    <th style="text-align:center;"  rowspan="4"></th>
                                </tr>
                                <tr>
                                    <th style="text-align:center;" colspan="4">400/230v-50Hz/1500rpm</th>
                                   
                                </tr>
                                <tr>
                                    <th style="text-align:center;" colspan="2">KVA</th>
                                    <th style="text-align:center;" colspan="2">KW</th>
                                    <?php if ($opentype == 1) { ?>
                                        <th style="text-align:center;" colspan="3">LxWxH(mm)</th>
                                        <th style="text-align:center;" rowspan="2"> Weight* (Kg)</th>
                                    <?php } ?>
                                    <?php if ($silenttype == 1) { ?>
                                        <th style="text-align:center;" colspan="3">LxWxH(mm)</th>
                                        <th style="text-align:center;" rowspan="2"> Weight* (Kg)</th>
                                    <?php } ?>
                                    <!-- <th style="text-align:center;"></th> -->
                                </tr>
                                <tr>
                                    <th style="text-align:center;">PRP</th>
                                    <th style="text-align:center;">ESP</th>
                                    <th style="text-align:center;">PRP</th>
                                    <th style="text-align:center;">ESP</th>
                                    <?php if ($opentype == 1) { ?>
                                        <th style="text-align:center;">L</th>
                                        <th style="text-align:center;">W</th>
                                        <th style="text-align:center;">H</th>
                                    <?php } ?>
                                    <?php if ($silenttype == 1) { ?>
                                        <th style="text-align:center;">L</th>
                                        <th style="text-align:center;">W</th>
                                        <th style="text-align:center;">H</th>
                                    <?php } ?>
                                    <!-- <th style="text-align:center;"></th> -->
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                <?php

                                if (sizeof($productspec) > 0) {
                                    $n = 1;
                                    foreach ($productspec as $ps) { ?>

                                        <tr>
                                            <td><?php echo $n; ?></td>
                                            <td><?php echo $ps['model']; ?></td>
                                            <td><?php echo $ps['engine']; ?></td>

                                            <td><?php echo (strpos($ps['outputKvaPrp'], ".00") ? number_format($ps['outputKvaPrp'], 0, '.', '') : number_format($ps['outputKvaPrp'], 1, '.', '')); ?></td>
                                            <td><?php echo (strpos($ps['outputKvaEsp'], ".00") ? number_format($ps['outputKvaEsp'], 0, '.', '') : number_format($ps['outputKvaEsp'], 1, '.', ''));
                                                ?></td>
                                            <td><?php echo (strpos($ps['outputKwPrp'], ".00") ? number_format($ps['outputKwPrp'], 0, '.', '') : number_format($ps['outputKwPrp'], 1, '.', '')); ?></td>
                                            <td><?php echo (strpos($ps['outputKwEsp'], ".00") ? number_format($ps['outputKwEsp'], 0, '.', '') : number_format($ps['outputKwEsp'], 1, '.', '')); ?></td>

                                            <td><?php echo (strpos($ps['loadFuel'], ".00") ? number_format($ps['loadFuel'], 0, '.', '') : (substr($ps['loadFuel'], -1) == '0' ? number_format($ps['loadFuel'], 1, '.', '') : number_format($ps['loadFuel'], 2, '.', ''))); ?></td>
                                            <?php if ($opentype == 1) { ?>
                                                <td><?php echo $ps['ot_l']; ?></td>
                                                <td><?php echo $ps['ot_w']; ?></td>
                                                <td><?php echo $ps['ot_h']; ?></td>
                                                <td><?php echo $ps['ot_weight']; ?></td>
                                            <?php } ?>
                                            <?php if ($silenttype == 1) { ?>
                                                <td><?php echo $ps['st_l']; ?></td>
                                                <td><?php echo $ps['st_w']; ?></td>
                                                <td><?php echo $ps['st_h']; ?></td>
                                                <td><?php echo $ps['st_weight']; ?></td>
                                            <?php } ?>
                                            <td>
                                           
                                            <?php $nomor= "62".substr($data_contactus[0]['whatsapp'],1) ;
                                                $msg="Saya ingin bertanya tentang genset ". $data_sub_detail[0]['title']." model ". $ps['model'] ." ". $ps['engine'];
                                            ?>
                                              <a style="color:white" class="btn btn-success btn-md" href="https://api.whatsapp.com/send?phone=<?php echo $nomor . "&text=".$msg;?>" target="_blank" style="color:white">Info</a>
                                         
                                            </td>
                                        </tr>
                                <?php $n++;
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- </div> -->
                </div>
            </div>
        </div>


        <?php if (sizeof($data_spesifikasi_child) > 0) {
            $opentype = $data_spesifikasi_child['opentype'];
            $silenttype = $data_spesifikasi_child['silenttype'];
            $productspec = $data_spesifikasi_child['productspec'];
            $padding = "padding-top:70px;";
            $padddingimg = "";
            if (strtolower($data_spesifikasi_child['title']) == 'kubota' || strtolower($data_spesifikasi_child['title']) == 'perkins') {
                $padding = "padding-top:50px;";
                $padddingimg = "padding-top:35px;";
            }

        ?>
            <div class="row" style="margin-top:40px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row align-items-end" style="display: flex;">
                        <div class="col-md-8 col-sm-6 col-xs-6" style="display:inline-block;align-self:flex-end">
                            <h5 style="margin-bottom:2px"><?php echo (sizeof($productspec) > 0 ? (substr($productspec[0]['model'], 0, 2) == "AP" ? 'APK' : substr($productspec[0]['model'], 0, 2)) : ''); ?> Series Specifications</h5>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-4 text-right" style="display:inline-block;align-self:flex-end">
                            <h5 style="margin-bottom:2px">Powered By</h5>
                        </div>
                        <div class="col-md-1 col-sm-2 col-xs-2 " style="padding-left:0px;display:inline-block;align-self:flex-end">
                            <?php if ($data_spesifikasi['logo'] != "") { ?>
                                <img style="max-height:50px;float:right" src="<?php echo $data_spesifikasi['logo']; ?>" alt="<?php if (isset($data_sub_detail[0]['meta_title'])) {
                                                                                                                                    echo $data_sub_detail[0]['meta_title'];
                                                                                                                                } else {
                                                                                                                                    $data_sub_detail[0]['meta_title'];
                                                                                                                                }; ?>">
                            <?php } else { ?>
                                <img src="<?php echo base_url() . "assets/front/images/no_image.png"; ?>" alt="<?php if (isset($data_sub_detail[0]['meta_title'])) {
                                                                                                                    echo $data_sub_detail[0]['meta_title'];
                                                                                                                } else {
                                                                                                                    $data_sub_detail[0]['title'];
                                                                                                                }; ?>">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12" style="overflow-x:auto;">
                            <table class="table table-bordered responsive nowrap" style="text-align:center;font-size:smaller" id="dataTabledetailproductspec" width="100%" cellspacing="1">
                                <thead style="text-align:center;    background-color: aliceblue;">
                                    <tr>
                                        <th style="text-align:center;" rowspan="4">No</th>
                                        <th style="text-align:center;" rowspan="4">Model</th>
                                        <th style="text-align:center;" rowspan="4">Engine</th>

                                        <th style="text-align:center;" colspan="4">Output</th>

                                        <th style="text-align:center;" rowspan="4"> 100% Load Fuel<br> Consumption (L/h)</th>
                                        <?php if ($opentype == 1) { ?>
                                            <th style="text-align:center;" colspan="4" rowspan="2"> OPEN TYPE</th>
                                        <?php } ?>
                                        <?php if ($silenttype == 1) { ?>
                                            <th style="text-align:center;" colspan="4" rowspan="2">SILENT TYPE</th>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;" colspan="4">400/230v-50Hz/1500rpm</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;" colspan="2">KVA</th>
                                        <th style="text-align:center;" colspan="2">KW</th>
                                        <?php if ($opentype == 1) { ?>
                                            <th style="text-align:center;" colspan="3">LxWxH(mm)</th>
                                            <th style="text-align:center;" rowspan="2"> Weight* (Kg)</th>
                                        <?php } ?>
                                        <?php if ($silenttype == 1) { ?>
                                            <th style="text-align:center;" colspan="3">LxWxH(mm)</th>
                                            <th style="text-align:center;" rowspan="2"> Weight* (Kg)</th>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center;">PRP</th>
                                        <th style="text-align:center;">ESP</th>
                                        <th style="text-align:center;">PRP</th>
                                        <th style="text-align:center;">ESP</th>
                                        <?php if ($opentype == 1) { ?>
                                            <th style="text-align:center;">L</th>
                                            <th style="text-align:center;">W</th>
                                            <th style="text-align:center;">H</th>
                                        <?php } ?>
                                        <?php if ($silenttype == 1) { ?>
                                            <th style="text-align:center;">L</th>
                                            <th style="text-align:center;">W</th>
                                            <th style="text-align:center;">H</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody style="text-align:center;">
                                    <?php

                                    if (sizeof($productspec) > 0) {
                                        $n = 1;
                                        foreach ($productspec as $ps) { ?>

                                            <tr>
                                                <td><?php echo $n; ?></td>
                                                <td><?php echo $ps['model']; ?></td>
                                                <td><?php echo $ps['engine']; ?></td>

                                                <td><?php echo (strpos($ps['outputKvaPrp'], ".00") ? number_format($ps['outputKvaPrp'], 0, '.', '') : number_format($ps['outputKvaPrp'], 1, '.', '')); ?></td>
                                                <td><?php echo (strpos($ps['outputKvaEsp'], ".00") ? number_format($ps['outputKvaEsp'], 0, '.', '') : number_format($ps['outputKvaEsp'], 1, '.', ''));
                                                    ?></td>
                                                <td><?php echo (strpos($ps['outputKwPrp'], ".00") ? number_format($ps['outputKwPrp'], 0, '.', '') : number_format($ps['outputKwPrp'], 1, '.', '')); ?></td>
                                                <td><?php echo (strpos($ps['outputKwEsp'], ".00") ? number_format($ps['outputKwEsp'], 0, '.', '') : number_format($ps['outputKwEsp'], 1, '.', '')); ?></td>

                                                <td><?php echo (strpos($ps['loadFuel'], ".00") ? number_format($ps['loadFuel'], 0, '.', '') : (substr($ps['loadFuel'], -1) == '0' ? number_format($ps['loadFuel'], 1, '.', '') : number_format($ps['loadFuel'], 2, '.', ''))); ?></td>
                                                <?php if ($opentype == 1) { ?>
                                                    <td><?php echo $ps['ot_l']; ?></td>
                                                    <td><?php echo $ps['ot_w']; ?></td>
                                                    <td><?php echo $ps['ot_h']; ?></td>
                                                    <td><?php echo $ps['ot_weight']; ?></td>
                                                <?php } ?>
                                                <?php if ($silenttype == 1) { ?>
                                                    <td><?php echo $ps['st_l']; ?></td>
                                                    <td><?php echo $ps['st_w']; ?></td>
                                                    <td><?php echo $ps['st_h']; ?></td>
                                                    <td><?php echo $ps['st_weight']; ?></td>
                                                <?php } ?>
                                            </tr>
                                    <?php $n++;
                                        }
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- </div> -->
                    </div>
                </div>
            </div>
    </div>
<?php } ?>
</div>
</section>