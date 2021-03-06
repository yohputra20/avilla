        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">


              <div class="col-md-6 col-sm-6 col-xs-6">
                <h6 class="m-0 font-weight-bold" style="color:#18011B;">Data user</h6>
              </div>
              <div class="col-md-1 col-sm-6 col-xs-6">
                <button href="#" class="btn btn-success btn-block btm-sm" id="userAdd">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered responsive nowrap" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>

                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;
                    foreach ($user_data['query'] as $row) : ?>
                      <tr>
                        <td width="5%"><?php echo $i; ?></td>
                        <td width="25%"><?php echo $row['username']; ?></td>

                        <td align="center" width="10%">
                          <button id="changePassword" class="btn btn-info btn-sm margin5" data-value="<?php echo $row['id']; ?>">
                            Change Password
                          </button>
                          <button id="userEdit" class="btn btn-warning btn-sm margin5" data-value="<?php echo $row['id']; ?>">
                            <i class="fa fa-edit"></i>
                          </button>

                          <button id="userDelete" class="btn btn-danger btn-sm margin5" data-value="<?php echo $row['id']; ?>">
                            <i class="fa fa-trash"></i>
                          </button>

                        </td>
                      </tr>
                    <?php $i++;
                    endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->