<div class="container-fluid">
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

        </div>
        <div class="card-body">
            <div class="row" style="width: 60%;">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">User Management</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Role</a></li>
                    <!--                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>-->
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <h3 style="text-align: left">User Management</h3>
                        <div id="divowner">
                            <table id="ownerdata" class="display" cellspacing="0">
                                <thead>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <h3 style="text-align: left">Role Map Management</h3>
                        <div style="height: 30px">
                            <div class="alert alert-success" role="alert" id="alert" style="width: 40%;padding-top: -20px;">...</div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <form class="form-inline" style="float:left;">
                                    <div class="form-group">
                                        <label for="exampleInputName2">
                                            Role :</label>
                                        <select class="form-control" id="role" name="role" onchange="changerole()">
                                            <?php
                                            if (isset($role)) {
                                                foreach ($role as $r) {
                                                    echo '<option value="' . $r['roleid'] . '">' . $r['rolename'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="divowner">
                            <table id="roledata" class="display" cellspacing="0">
                                <thead>
                                    <th>Description</th>
                                    <th>Action</th>
                                    <!--<th></th>-->
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">...</div>
                    <div role="tabpanel" class="tab-pane" id="settings">...</div>
                </div>
            </div>
        </div>
    </div>

</div>