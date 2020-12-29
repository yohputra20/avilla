        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold" style="color:#18011B;">Data client</h6>
                    <a href="#" class="btn btn-success" id="clientAdd">
                        <span class="text">Add client</span>
                    </a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered responsive nowrap" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>logo</th>
                                    <th>alt</th>
                                    <th>Description</th>
                                    <!-- <th>image</th> -->
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($client_data['query'] as $row) : ?>
                                    <tr>
                                        <td width="5%"><?php echo $i; ?></td>
                                        <td width="25%"><?php echo $row['title']; ?></td>

                                        <td width="20%">
                                            <img id="preview_logo_list" class="img-fluid" width="75" alt="image preview" src="<?php if ($row['logo_path'] != '') {
                                                                                                                                    echo base_url() . "assets/admin/upload/client/" . $row['logo_path'];
                                                                                                                                } else {
                                                                                                                                    echo base_url() . "assets/admin/img/no_photo.jpg";
                                                                                                                                } ?>" />
                                        </td>
                                        <td width="30%"><b><?php echo $row['alt'] ?></b>
                                            <p><?php echo $row['meta_description'] ?></p>
                                        </td>
                                        <td width="30%"><?php echo $row['description']; ?></td>
                                        <!-- <td width="25%"> <img id="preview_image_list" width="100" alt="image preview" src="<?php if ($row['img_path'] != '') {
                                                                                                                                    echo base_url() . "assets/admin/upload/client/" . $row['img_path'];
                                                                                                                                } else {
                                                                                                                                    echo base_url() . "assets/admin/img/no_photo.jpg";
                                                                                                                                } ?>" /></td> -->
                                        <td width="5%"><?php echo $row['order_by']; ?></td>
                                        <td align="center" width="10%">
                                            <button id="clientEdit" style="width:80px;" class="btn btn-warning margin5" data-value="<?php echo $row['id']; ?>">
                                                Edit
                                            </button>
                                            <button id="clientDelete" style="width:80px;" class="btn btn-danger margin5" data-value="<?php echo $row['id']; ?>">
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
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold" style="color:#18011B;">Galery</h6>
                    <a href="#" class="btn btn-success" id="galeryAdd">
                        <span class="text">Add Image</span>
                    </a>

                </div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($galery_data as $galery) { ?>
                            <div class="col-4 col-md-2 col-lg-2" style="margin-bottom:30px">
                                <button class="btn btn-danger btn-sm btndelete btndeletegalery"  data-id="<?php echo $galery['id'] ?>" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                <img class="img-fluid img-thumbnail" src=" <?php if ($galery['path_img'] != '') {
                                                                                echo base_url() . "assets/admin/upload/client/" . $galery['path_img'];
                                                                            } else {
                                                                                echo base_url() . "assets/admin/img/no_photo.jpg";
                                                                            } ?>">
                            </div>
                        <?php  } ?>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->