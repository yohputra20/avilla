

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->
         
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold" style="color:#18011B;">Data about</h6>
              <?php if ($galley_data['query'] == null) { ?>    
                <a href="#" class="btn btn-success" id="aboutAdd">
                  <span class="text">Add About</span>
              </a>
              <?php } ?>            
                
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>                  
                  <tbody>
                  <?php $i = 1; foreach($galley_data['query'] as $row): ?>
                    <tr>   
                        <td width="10%"><?php echo $i; ?></td>
                        <td width="35%"><?php echo $row['title']; ?></td>
                        <td width="45%"><?php echo $row['description']; ?></td>
                        <td align="center" width="10%">
                          <button id="aboutEdit" style="width:80px;" class="btn btn-warning margin5" data-value="<?php echo $row['id']; ?>">
                              Edit
                          </button>
                          <button id="aboutDelete" style="width:80px;" class="btn btn-danger margin5" data-value="<?php echo $row['id']; ?>">
                              Delete
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

      </div>
      <!-- End of Main Content -->