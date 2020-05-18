<div class="modal fade bs-example-modal-sm" id="addModal" tabindex="-1" role="dialog" aria-labelledby="memberuserModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #48b5e9;">
                <button type="button" class="close" style="color:#fff" onclick="closemodal()" aria-label="Close"><span aria-hidden="true" style="font-color:#fff">&times;</span></button>
                <h4 class="modal-title" style="color:#fff">User Management</h4>
            </div>

            <div class="modal-body">
                <form class="form-inline" action="<?php echo base_url(); ?>index.php/usermanegement/saveUser/" method="post" enctype="multipart/form-data" id="umanagementform">
                    <div class="row">
                        <div class="col-md-4"><label for="exampleInputName2">Username<b style='color: red'>*</b></label></div>
                        <div class="col-md-8">
                            <input type="hidden" id="userid" name="userid" value="">
                           
                            <input type="text" class="form-control" id="uname" name="uname" onkeyup="chekusername()" placeholder="username" required>
                            <span class="glyphicon glyphicon-search" id="error" aria-hidden="true"></span>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 5px;margin-top: 5px;">
                        <div class="col-md-4"><label for="exampleInputName2">Role<b style='color: red'>*</b></label></div>
                        <div class="col-md-8">
                            <select id='roleid' name='roleid' class="form-control" onchange="showpassword()" required>
                                <option value="">---</option>
                                <?php
                                if (isset($role)) {
                                    foreach ($role as $value) {
                                        echo '<option value="' . $value['roleid'] . '">' . $value['rolename'] . '</option>';
                                    }
                                }
                                ?>
                               
                            </select>
                        </div>
                    </div>
                    <div class="row divpassword" style="margin-bottom: 5px;margin-top: 5px;">
                        <div class="col-md-4"><label for="exampleInputName2">Password<b style='color: red'>*</b></label></div>
                        <div class="col-md-8">

                            <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Password">

                        </div>
                    </div>
                    <div class="row divpassword" style="margin-bottom: 5px;margin-top: 5px;">
                        <div class="col-md-4"><label for="exampleInputName2">Confirm Password<b style='color: red'>*</b></label></div>
                        <div class="col-md-8">

                            <input type="password" class="form-control" id="konfirmpasswd" name="konfirmpasswd" placeholder="Confirm Password">

                        </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm" onclick="closemodal()">Cancel</button>
                <button type="submit" class="btn btn-sm">Save</button>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>