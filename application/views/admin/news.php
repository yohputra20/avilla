<body id="page-top">
  <div id="rpModal" style="">
      <center>
        <div class="loader"></div>
      </center>
  </div>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#18011B;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
          <img src="<?php echo base_url(); ?>assets/admin/img/icon_tab_browser.png" width="50px"/>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Missions -->
      <li class="nav-item">
        <a class="nav-link" href="comissions">
          <i class="fas fa-fw fa-suitcase"></i>
          <span>Commissions</span></a>
      </li>

      <!-- Nav Item - gallery -->
      <li class="nav-item">
        <a class="nav-link" href="gallery">
          <i class="fas fa-fw fa-image"></i>
          <span>Gallery</span></a>
      </li>

       <!-- Nav Item - News -->
       <li class="nav-item">
        <a class="nav-link" href="news">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>News</span></a>
      </li>

      <!-- Nav Item - About -->
      <li class="nav-item">
        <a class="nav-link" href="about">
          <i class="fas fa-fw fa-address-card"></i>
          <span>About</span></a>
      </li>

      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username; ?></span>
                <i class="far fa-user-circle fa-2x"></i>
                <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold" style="color:#18011B;">Data news</h6>
              <a href="#" class="btn btn-success" id="newsAdd">
                  <span class="text">Add News</span>
              </a>
                
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>                  
                  <tbody>
                  <?php $i = 1; foreach($galley_data['query'] as $row): ?>
                    <tr>   
                        <td width="10%"><?php echo $i; ?></td>
                        <td width="25%"><?php echo $row['title']; ?></td>
                        <td width="30%"><img class="imagesize" src="<?php echo base_url('assets/admin/upload/news/'. $row['image']);?>" /></td>
                        <td width="25%"><?php echo $row['description']; ?></td>
                        <td align="center" width="10%">
                          <button id="newsEdit" style="width:80px;" class="btn btn-warning margin5" data-value="<?php echo $row['id']; ?>">
                              Edit
                          </button>
                          <button id="newsDelete" style="width:80px;" class="btn btn-danger margin5" data-value="<?php echo $row['id']; ?>">
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