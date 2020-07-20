<!-- product MODAL -->

<!-- Tambah product Modal-->
<div class="modal fade bd-example-modal-lg" id="productDetailSpecModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title labelAdmin" id="title_productdetail_modal">Detail Specification</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

            <div class="row">
                <div class="col-md-12 col-12">
                <h5><?php echo $title; ?></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-4">
                <img class="image" src="<?php echo $image; ?>" style="width:100%">
                </div>
                <div class="col-md-8 col-8">
                <?php echo $desc; ?>
                </div>
            </div>
            <?php if(isset($productspec)){ ?>
              <div class="row">
                <div class="col-md-9 col-9">
                </div>
                <div class="col-md-3 col-3">
                powered by : <?php echo $title; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-12">
                <div class="table-responsive">
                        <table class="table table-bordered responsive nowrap" id="dataTabledetailproductspec" width="100%" cellspacing="1">
                            <thead style="text-align:center;">
                                <tr>
                                    <th rowspan="4">No</th>
                                    <th  rowspan="4">Model</th>
                                    <th  rowspan="4">Engine</th>

                                    <th colspan="4">Output</th>

                                    <th rowspan="4"> 100% Load Fuel<br> Consumption (L/h)</th>
                                    <?php if ($opentype == 1) {?>
                                    <th colspan="4" rowspan="2"> OPEN TYPE</th>
                                    <?php }?>
                                     <?php if ($silenttype == 1) {?>
                                    <th colspan="4" rowspan="2">SILENT TYPE</th>
                                       <?php }?>
                                </tr>
                                 <tr>
                                    <th colspan="4">400/230v-50Hz/1500rpm</th>
                                </tr>
                                 <tr>
                                    <th colspan="2">KVA</th>
                                    <th colspan="2">KW</th>
                                        <?php if ($opentype == 1) {?>
                                    <th colspan="3">LxWxH(mm)</th>
                                     <th rowspan="2"> Weight*  (Kg)</th>
                                        <?php }?>
                                     <?php if ($silenttype == 1) {?>
                                    <th colspan="3">LxWxH(mm)</th>
                                    <th rowspan="2"> Weight*  (Kg)</th>
                                     <?php }?>
                                </tr>
                                 <tr>
                                    <th >PRP</th>
                                    <th >ESP</th>
                                    <th >PRP</th>
                                    <th >ESP</th>
                                    <?php if ($opentype == 1) {?>
                                    <th >L</th>
                                    <th >W</th>
                                    <th >H</th>
                                    <?php }?>
                                     <?php if ($silenttype == 1) {?>
                                    <th >L</th>
                                    <th >W</th>
                                    <th >H</th>
                                      <?php }?>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                            <?php if(sizeof($productspec)>0){ 
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
                    </div>
                    
                </div>
                

            </div>
             <?php } ?>
            </div>
            <div class="modal-footer" style="justify-content:center;">
                <button class="btn btn-danger btn-sm" type="button" data-dismiss="modal">Cancel</button>
                <!-- <button type="submit" class="btn btn-primary" id="productSubmit">Submit</button> -->
            </div>

        </div>
    </div>
</div>
