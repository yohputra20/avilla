<!-- ABOUT MODAL -->

    <!-- Tambah about Modal-->
    <div class="modal fade bd-example-modal-lg" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title labelAdmin" id="title_about_modal"></h5>
          <!-- <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button> -->
        </div>
        <div class="modal-body">
            <form role="form" class="form-horizontal" id="aboutForm" method="POST" enctype="multipart/form-data">
                <div class="tab-content">
                    <div class="col-md-12">
                      <input type="hidden" class="form-control" id="aboutId" name="aboutId" value="">
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="about_title">Title :</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="about_title" value="" name="about_title" required="">                               
                            </div>
                        </div>                        
                        <div class="form-group col-sm-12">
                            <label class="control-label col-sm-12" for="gallert_desc">Description :</label>
                            <div class="col-sm-12">
                            <textarea id="about_desc" name="about_desc" required=""></textarea>                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content:center;">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="aboutSubmit">Submit</button>
                </div>                
            </form>
        </div>        
      </div>
    </div>
  </div>