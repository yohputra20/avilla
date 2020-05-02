        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold" style="color:#18011B;">Data product</h6>
              <a href="#" class="btn btn-success" id="productAdd">
                <span class="text">Add Product</span>
              </a>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <td width="25%"><?php echo $row['title']; ?></td>
                        <td width="25%"><b><?php echo $row['alt'] ?></b>
                          <p><?php echo $row['meta_description'] ?></p>
                        </td>
                        <td width="25%">
                        <img id="preview_image_list" width="200" alt="image preview" src="<?php if ($row['img_path'] != '') {
                                                                                  echo base_url() . "/assets/admin/upload/product/" . $row['img_path'];
                                                                                } else {
                                                                                  echo base_url() . "/assets/admin/img/no_photo.jpg";
                                                                                } ?>" />
                        </td>
                        <td width="35%"><?php echo $row['description']; ?></td>
                        <td align="center" width="10%">
                          <button id="productEdit" style="width:80px;" class="btn btn-warning margin5" data-value="<?php echo $row['id']; ?>">
                            Edit
                          </button>
                          <button id="productDelete" style="width:80px;" class="btn btn-danger margin5" data-value="<?php echo $row['id']; ?>">
                            Delete
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