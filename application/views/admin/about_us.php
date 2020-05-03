<div class="container-fluid">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->
         
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold" style="color:#18011B;">Data about us</h6>
              <?php if ($galley_data['query'] == null) { ?>    
                <a href="#" class="btn btn-success" id="aboutAdd">
                  <span class="text">Add About us</span>
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
                      <th>Meta</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>                  
                  <tbody>
                  <?php $i = 1; foreach($galley_data['query'] as $row): ?>
                    <tr>   
                        <td width="10%"><?php echo $i; ?></td>
                        <td width="35%"><?php echo $row['title']; ?></td>
                        <td width="25%">
                          <b><?php echo $row['meta_title'] ?></b>
                          <p><?php echo $row['meta_description'] ?></p>
                        </td>
                        <td width="45%"><?php echo $row['description']; ?></td>
                        <td align="center" width="10%">
                          <button id="about_usEdit" " class="btn btn-warning margin5" data-value="<?php echo $row['id']; ?>">
                          <i class="fa fa-edit"></i>
                          </button>
                          <button id="about_usDelete"  class="btn btn-danger margin5" data-value="<?php echo $row['id']; ?>">
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