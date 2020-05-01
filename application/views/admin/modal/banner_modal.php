<!-- banner MODAL -->

    <!-- Tambah banner Modal-->
    <div class="modal fade" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title labelAdmin" id="title_banner_modal">Add banner</h5>
          <!-- <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button> -->
        </div>
        <div class="modal-body">
            <form role="form" class="form-horizontal" id="bannerForm" method="POST" enctype="multipart/form-data">
                <div class="tab-content">
                    <div class="col-md-12">
                      <input type="hidden" class="form-control" id="bannerId" name="bannerId" value="">
                        <!-- <div class="form-group">
                            <label class="control-label col-sm-12" for="banner_title">Title :</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="banner_title" value="" name="banner_title" required="">                               
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="banner_image"> Image :</label>
                            
                            <input type="hidden" class="form-control" id="banner_old_image" name="banner_old_image" value="">
                            <div class="col-sm-2 image-upload">
                                <label for="image_source_banner" class="form-control">
                                  <center>
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                  </center>
                                </label>                                
                            </div>
                            <div class="col-sm-12">
                              <div id="app" @change="change" @dragover="dragover" @drop="drop">															
                                    <input class="fa fa-camera" style="display: none" type="file" id="image_source_banner" name="image_source_banner" onchange="bannerPreviewImage();" accept="image/jpeg,image/jpg,image/jpe,image/png,image/gif,image/webp,image/bmp,image/tiff" ref="input"/>															
                              </div>
                            </div>                           

                            <div class="banner-preview">
                              <div class="col-sm-3">
                              </div>
                              <div class="col-sm-9">
                                <img id="preview_image" alt="image preview" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label col-sm-12" for="gallert_desc">Urutan Letak :</label>
                            <div class="col-sm-12">       
                            <input type="text" class="form-control" id="orderby" value="" name="orderby" required="">                                                    
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label col-sm-12" for="gallert_desc">Description :</label>
                            <div class="col-sm-12">
                            <textarea id="banner_desc" name="banner_desc" required=""></textarea>                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content:center;">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="bannerSubmit">Submit</button>
                </div>                
            </form>
        </div>        
      </div>
    </div>
  </div>