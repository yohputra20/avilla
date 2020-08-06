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
        $padding="padding-top:70px;";
        $padddingimg="";
        if(strtolower($data_spesifikasi['title'])=='kubota'|| strtolower($data_spesifikasi['title'])=='perkins'){
            $padding="padding-top:50px;";
            $padddingimg="padding-top:35px;";
        }
        ?>
        <div class="row" style="margin-top:40px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row align-items-end">
                    <div class="col-md-6 col-sm-5 col-xs-5" style="min-height:50px">
                        <h5><?php echo (sizeof($productspec) > 0 ? (substr($productspec[0]['model'], 0, 2) == "AP" ? 'APK' : substr($productspec[0]['model'], 0, 2)) : ''); ?> Series Specifications</h5>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 text-right" style="min-height:50px">
                        <h5>Powered By</h5>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-3 " style="padding-left:0px" >
                        <?php if ($data_spesifikasi['logo'] != "") { ?>
                            <img style="max-height:50px" src="<?php echo $data_spesifikasi['logo']; ?>" alt="<?php if (isset($data_sub_detail[0]['meta_title'])) {
                                                                                                                    echo $data_spesifikasi['logo'];
                                                                                                                } else {
                                                                                                                    $data_spesifikasi['title'];
                                                                                                                }; ?>" >
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

                                            <td><?php echo (strpos($ps['outputKvaPrp'], ".00") ? number_format($ps['outputKvaPrp'], 0, '.', '') :  number_format($ps['outputKvaPrp'], 1, '.', '')); ?></td>
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

</section>