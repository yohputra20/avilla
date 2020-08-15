<!-- product MODAL -->

<!-- Tambah product Modal-->
<div class="modal fade bd-example-modal-lg" id="productDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title labelAdmin" id="title_productdetail_modal"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" class="form-horizontal" id="productDetailForm" method="POST" enctype="multipart/form-data">
                    <div class="tab-content">
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" id="productId" name="productId" value="<?php echo $product_id; ?>">
                            <input type="hidden" class="form-control" id="productDetailId" name="productDetailId" value="">
                            <div class="form-group">
                                <label class="control-label col-sm-12" for="product_title">Title<span style="color:red">*</span> :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="productDetail_title" value="" name="product_title" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-12" for="product_title">Title Meta<span style="color:red">*</span> :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="product_meta_title" value="" name="meta_title" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-12" for="product_title">Logo<span style="color:red">*</span> :</label>
                                <input type="hidden" class="form-control" id="productlogo_old_image" name="productlogo_old_image" value="">
                                <div class="col-sm-2 image-upload">
                                    <label for="image_source_productlogo" class="form-control">
                                        <center>
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                        </center>
                                    </label>
                                </div>
                                <div class="col-sm-12">
                                    <input class="fa fa-camera" style="display: none" type="file" id="image_source_productlogo" name="image_source_productlogo" onchange="productLogoImage()" accept="image/jpeg,image/jpg,image/jpe,image/png,image/gif,image/webp,image/bmp,image/tiff" ref="input" />
                                </div>
                                <div class="product-preview">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-9">
                                        <img id="previewlogo_image" alt="image preview" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-12" for="product_image"> Image :</label>

                                <input type="hidden" class="form-control" id="product_old_image" name="product_old_image" value="">
                                <div class="col-sm-2 image-upload">
                                    <label for="image_source_product" class="form-control">
                                        <center>
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                        </center>
                                    </label>
                                </div>
                                <div class="col-sm-12">
                                    <div>
                                        <input class="fa fa-camera" style="display: none" type="file" id="image_source_product" name="image_source_product" onchange="productPreviewImage();" accept="image/jpeg,image/jpg,image/jpe,image/png,image/gif,image/webp,image/bmp,image/tiff" ref="input" />
                                    </div>
                                </div>

                                <div class="product-preview">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-9">
                                        <img id="preview_image" alt="image preview" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label col-sm-12" for="product_desc">Description :</label>
                            <div class="col-sm-12">
                                <textarea id="descdetail" class="form-control" name="descdetail" rows="10"></textarea>
                            </div>
                        </div>
                         <div class="form-group col-sm-12">
                            <label class="control-label col-sm-12" for="product_desc">Product Specification:</label>
                            <div class="col-sm-12">
                                <input class='form_control' type="file" id="excel_product_spec" name="excel_product_spec" accept=".xls,.xlsx" ref="input">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                                <label class="control-label col-sm-12" for="product_title">Urutan Letak<span style="color:red">*</span> :</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="sorting" value="" name="sorting" required="">
                                </div>
                            </div>
                            <div class="form-group checkbox col-sm-12">
                                <label class="control-label col-sm-12" for="">Have parent :   <input type="checkbox"  id="ischild" value="1" name="ischild"></label>


                            </div>
                             <div class="form-group divIsParent col-sm-12" style="display:none">
                                <label class="control-label col-sm-12" for="">Paren Id :</label>
                                <div class="col-sm-12">
                                  <select id="parent_id" name="parent_id" class="form-control"></select>
                                </div>
                            </div>
                       
                    </div>
            </div>
            <div class="modal-footer" style="justify-content:center;">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="productSubmit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>