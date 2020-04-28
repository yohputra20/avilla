<!-- homeS MODAL -->
<!-- Tambah homes Modal-->
<div class="modal fade" id="homesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title labelAdmin" id="title_homes_modal"></h5>
          <!-- <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button> -->
        </div>
        <div class="modal-body">
            <form role="form" class="form-horizontal" id="homesForm" method="POST" enctype="multipart/form-data">
                <div class="tab-content">
                    <div class="col-md-12">
                      <input type="hidden" class="form-control" id="homesId" name="homesId" value="">
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="homes_title">Title :</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="homes_title" value="" name="homes_title" required="">                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="homes_image"> Image :</label>
                            
                            <!-- <input type="hidden" class="form-control" id="old_image" name="old_image" value=""> -->
                            <div class="col-sm-2 image-upload">
                                <label for="image_source_homes" class="form-control" onclick="homesAddImage();">
                                  <center>
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                  </center>
                                </label>
                                <!-- <div id="app" @change="change" @dragover="dragover" @drop="drop">															
                                  <input class="fa fa-camera" style="display: none" type="file" multiple="" id="image_source_homes" name="image_source_homes[]" accept="image/jpeg,image/jpg,image/jpe,image/png,image/gif,image/webp,image/bmp,image/tiff" ref="input"/>															
                                </div> -->
                            </div>

                            <div class="homes-preview">
                              <div class="col-sm-12">
                              <input type="hidden" name="sequence_image" id="sequence_image" class="sequence_image" value="0">
                              <input type="hidden" disable name="unselect" id="unselect" class="unselect" value="">
                              <input type="text"  disable style="display:none;" name="selected_image" id="selected_image" class="selected_image" value="" required="">
                                <!-- <img id="preview_image" alt="image preview" /> -->
                                <span id="imginfo" style="display:none;">
                                  <i class="fa fa-info-circle infothumb" aria-hidden="true"></i>
                                  <span class="infothumb">Green squares are thumbnails image</span>
                                </span>
                                <div id="homes_preview_image">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label col-sm-12" for="gallert_desc">Description :</label>
                            <div class="col-sm-12">
                            <textarea id="homes_desc" name="homes_desc" required=""></textarea>                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content:center;">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="homesSubmit">Submit</button>
                </div>                
            </form>
        </div>        
      </div>
    </div>
  </div>


   <!-- View homes Modal-->
   <div class="modal fade" id="homesViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title labelAdmin" id="exampleModalLabel">View home</h5>
          <!-- <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button> -->
        </div>
        <div class="modal-body">
            <form role="form" class="form-horizontal" id="homesViewForm" method="POST" enctype="multipart/form-data">
                <div class="tab-content">
                    <div class="col-md-12">
                      <input type="hidden" class="form-control" id="homesViewId" name="homesViewId" value="">
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="homes_title">Title :</label>
                            <div class="col-sm-12" id="view_title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="homes_image"> Image :</label>
                            <span class="col-sm-12" id="imginfo" style="display:block;">
                                  <i class="fa fa-info-circle infothumb" aria-hidden="true"></i>
                                  <span class="infothumb">Green squares are thumbnails image</span>
                                </span>
                            <div class="homes-preview">
                              <div class="col-sm-12" id="view_image">
                                <!-- <img id="preview_image" alt="image preview" /> -->
                                <!-- <div id="view_image">
                                </div> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="gallert_desc">Description :</label>
                            <div class="col-sm-12" id="view_desc">                 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content:center;">
                    <button class="btn btn-info" type="button" data-dismiss="modal">OK</button>
                </div>                
            </form>
        </div>        
      </div>
    </div>
  </div>
