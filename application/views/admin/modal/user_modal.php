<!-- user MODAL -->

<!-- Tambah user Modal-->
<div class="modal fade bd-example-modal-lg" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title labelAdmin" id="title_user_modal"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <textarea style="display: none"></textarea>
                <form role="form" class="form-horizontal" id="userForm" method="POST" enctype="multipart/form-data">
                    <div class="tab-content">
                        <div class="col-md-12">
                            <input type="hidden" class="form-control" id="userId" name="userId" value="">
                            <input type="hidden" class="form-control" id="typeedit" name="typeedit" value="">
                            <div class="form-group divusername">
                                <label class="control-label col-sm-12" for="user_title">Username<span style="color:red">*</span> :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="username" value="" name="username" required="">
                                </div>
                            </div>
                            <div class="divpassword">
                                <div class="form-group divcurrentpassword">
                                    <label class="control-label col-sm-12" for="user_title">Current Password:</label>
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control" id="currentpasswords" value="" name="currentpasswords" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-12" for="user_title">Password<span style="color:red">*</span> :</label>
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control" id="passwords" value="" name="passwords" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-12" for="user_title">Confirmation Password<span style="color:red">*</span> :</label>
                                    <div class="col-sm-12">
                                        <input 
                                        type="password" 
                                        class="form-control" 
                                        id="confirmpasswords" 
                                        value="" 
                                        name="confirmpasswords" 
                                        data-parsley-equalto="#passwords"
                                        required="">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
            </div>
            <div class="modal-footer" style="justify-content:center;">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="userSubmit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>