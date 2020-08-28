        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <a href="<?php echo base_url(); ?>admin/product" class="btn btn-primary btn-sm" id="backproduct">
                        back
                    </a>

                    <h6 class="m-0 font-weight-bold" style="color:#18011B;">Data Product Detail</h6>
                    <button href="#" onclick="clickproductdetailadd()" class="btn btn-success" id="productDetailAdd">
                        <i class="fa fa-plus"></i>
                    </button>
                    <input type="hidden" id="product_id" value="<?php echo $product_id;?>">

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered responsive nowrap" id="dataTabledetailproduct" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Meta</th>
                                    <th>Image</th>
                                    <th>Logo</th>
                                    <th>Download Spesifikasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="divmodalspecdetail"></div>
        <!-- /.container-fluid -->