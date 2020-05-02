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
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>logo</th>
                                    <th>alt</th>
                                    <th>Description</th>
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
                                       
                                        <td width="30%">
                                            <img id="preview_image_list" width="200" alt="image preview" src="<?php if($row['logo_path']!=''){ echo base_url() . "/assets/admin/upload/client/" . $row['logo_path'];}else{ echo base_url() . "/assets/admin/img/no_photo.jpg";} ?>" />
                                        </td>
                                        <td width="30%"><b><?php echo $row['alt'] ?></b>
                                            <p><?php echo $row['meta_description'] ?></p>
                                        </td>
                                        <td width="25%"><?php echo $row['description']; ?></td>
                                        <td width="25%"><?php echo $row['order_by']; ?></td>
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

        </div>
        <!-- /.container-fluid -->