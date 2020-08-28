 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
             <h6 class="m-0 font-weight-bold" style="color:#18011B;">Data Banner</h6>
             <a href="#" class="btn btn-success" id="bannerAdd">
             <i class="fa fa-plus"></i>
             </a>

         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Image</th>
                             <th>Description</th>
                             <th>Urutan Letak</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $i = 1; foreach($banner_data['query'] as $row): ?>
                         <tr>
                             <td width="10%"><?php echo $i; ?></td>
                             <td width="25%"><img class="imagesize"
                                     src="<?php echo base_url('assets/admin/upload/banner/'. $row['img_path']);?>" /></td>
                             <td width="45%"><?php echo $row['description']; ?></td>
                             <td width="10%"><?php echo $row['orderby']; ?></td>
                             <td align="center" width="10%">
                                 <button id="bannerEdit" style="width:80px;" class="btn btn-warning margin5"
                                     data-value="<?php echo $row['id']; ?>">
                                     <i class="fa fa-edit"></i>
                                 </button>
                                 <button id="bannerDelete" style="width:80px;" class="btn btn-danger margin5"
                                     data-value="<?php echo $row['id']; ?>">
                                     <i class="fa fa-trash"></i>
                                 </button>
                             </td>
                         </tr>
                         <?php $i++; endforeach; ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
     
 </div>
 <!-- /.container-fluid -->

