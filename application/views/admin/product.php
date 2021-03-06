        <!-- Begin Page Content -->
        <div class="container-fluid productdetail">

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold" style="color:#18011B;">Data product</h6>
              <button href="#" class="btn btn-success" id="productAdd">
                <i class="fa fa-plus"></i>
              </button>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered responsive nowrap" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Meta</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;
                    foreach ($product_data['query'] as $row) : ?>
                      <tr>
                        <td width="5%"><?php echo $i; ?></td>
                        <td width="20%"><?php echo $row['title']; ?></td>
                        <td width="20%"><b><?php echo $row['alt'] ?></b>
                          <p><?php echo $row['meta_description'] ?></p>
                        </td>
                        <td width="25%">
                          <img id="preview_image_list" alt="image preview" width="400" src="<?php if ($row['img_path'] != '') {
                                                                                  echo base_url() . "/assets/admin/upload/product/" . $row['img_path'];
                                                                                } else {
                                                                                  echo base_url() . "/assets/admin/img/no_photo.jpg";
                                                                                } ?>" />
                        </td>
                        <td width="30%"><?php echo $row['description']; ?></td>
                        <td align="center" width="5%">
                        <button id="productList" class="btn btn-info margin5" data-value="<?php echo $row['id']; ?>">
                            <i class="fa fa-list"></i>
                          </button>
                          <button id="productEdit" class="btn btn-warning margin5" data-value="<?php echo $row['id']; ?>">
                            <i class="fa fa-edit"></i>
                          </button>
                          <button id="productDelete" class="btn btn-danger margin5" data-value="<?php echo $row['id']; ?>">
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
        <div class="modaldetail"></div>
        <!-- /.container-fluid -->