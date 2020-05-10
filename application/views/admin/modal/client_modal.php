<!-- client MODAL -->
<!-- Tambah client Modal-->
<div class="modal fade bd-example-modal-lg" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title labelAdmin" id="title_client_modal"></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" id="clientForm" method="POST" enctype="multipart/form-data">
          <div class="tab-content">
            <div class="col-md-12">
              <input type="hidden" class="form-control" id="clientId" name="clientId" value="">
              <div class="form-group">
                <label class="control-label col-sm-12" for="client_title">Title<span style="color:red">*</span> :</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="client_title" value="" name="client_title" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="client_title">Alt<span style="color:red">*</span> :</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="client_meta_title" value="" name="meta_title" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="client_title">Meta Description<span style="color:red">*</span> :</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="client_meta_desc" value="" name="meta_desc" required="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="client_image">Logo Image :</label>

                <input type="hidden" class="form-control" id="client_old_image" name="client_old_image" value="">
                <div class="col-sm-2 image-upload">
                  <label for="image_source_client" class="form-control">
                    <center>
                      <i class="fa fa-camera" aria-hidden="true"></i>
                    </center>
                  </label>
                </div>
                <div class="col-sm-12">
                  <div id="app" @change="change" @dragover="dragover" @drop="drop">
                    <input class="fa fa-camera" style="display: none" type="file" id="image_source_client" name="image_source_client" onchange="clientPreviewImage();" accept="image/jpeg,image/jpg,image/jpe,image/png,image/gif,image/webp,image/bmp,image/tiff" ref="input" />
                  </div>
                </div>

                <div class="client-preview">
                  <div class="col-sm-3">
                  </div>
                  <div class="col-sm-9">
                    <img id="preview_image" alt="image preview" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-12" for="client_title">Urutan Letak :</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="client_order" value="" min="1" max="10" maxlength="10" minlength="1" name="client_order" required="" style="width: 40%">
                </div>
              </div>
            </div>
            <div class="form-group col-sm-12">
              <label class="control-label col-sm-12" for="client_desc">Description<span style="color:red">*</span> :</label>
              <div class="col-sm-12">
                <textarea id="client_desc" class="form-control" name="client_desc" required=""></textarea>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer" style="justify-content:center;">
        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" id="clientSubmit">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>