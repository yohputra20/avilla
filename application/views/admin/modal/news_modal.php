<!-- NEWS MODAL -->

    <!-- Tambah news Modal-->
    <div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title labelAdmin" id="title_news_modal"></h5>
          <!-- <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button> -->
        </div>
        <div class="modal-body">
            <form role="form" class="form-horizontal" id="newsForm" method="POST" enctype="multipart/form-data">
                <div class="tab-content">
                    <div class="col-md-12">
                      <input type="hidden" class="form-control" id="newsId" name="newsId" value="">
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="news_title">Title :</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="news_title" value="" name="news_title" required="">                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="news_image"> Image :</label>
                            
                            <input type="hidden" class="form-control" id="news_old_image" name="news_old_image" value="">
                            <div class="col-sm-2 image-upload">
                                <label for="image_source_news" class="form-control">
                                  <center>
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                  </center>
                                </label>                                
                            </div>
                            <div class="col-sm-12">
                              <div id="app" @change="change" @dragover="dragover" @drop="drop">															
                                    <input class="fa fa-camera" style="display: none" type="file" id="image_source_news" name="image_source_news" onchange="newsPreviewImage();" accept="image/jpeg,image/jpg,image/jpe,image/png,image/gif,image/webp,image/bmp,image/tiff" ref="input"/>															
                              </div>
                            </div>

                            <div class="news-preview">
                              <div class="col-sm-3">
                              </div>
                              <div class="col-sm-9">
                                <img id="preview_image" alt="image preview" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="control-label col-sm-12" for="gallert_desc">Description :</label>
                            <div class="col-sm-12">
                            <textarea id="news_desc" class="form-control" name="news_desc" required=""></textarea>                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content:center;">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="newsSubmit">Submit</button>
                </div>                
            </form>
        </div>        
      </div>
    </div>
  </div>