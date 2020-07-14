<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="<?php echo base_url(); ?>assets/admin/img/icon_tab_browser.png">
    <title>CMS Avilla</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin-font.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/responsive.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/responsive.bootstrap4.min.css" rel="stylesheet">
    <!-- Admin CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/admin.css" rel="stylesheet">
    <!-- jquery 3.4.1-->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.min.js"></script>

    <!-- Sweetalert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/sweetalert2.css">

    <!-- Parsley CSS -->
    <link href="<?php echo base_url(); ?>assets/admin/css/parsley.css" rel="stylesheet">
    <script>
        var base_url = '<?php echo base_url(); ?>';
    </script>

</head>

<body id="page-top">

    <div id="rpModal" style="">
        <center>
            <div class="loader"></div>
        </center>
    </div>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#919191;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
                <div class="sidebar-brand-icon" style="margin-top:40px;">
                    <img src="<?php echo base_url(); ?>assets/admin/img/icon_tab_browser.png" width="100px" />
                </div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider my-0" style="margin-top:45px !important;">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>admin/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Product -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/product">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Product</span></a>
            </li>

            <!-- Nav Item - Service -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/service">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Service</span></a>
            </li>

            <!-- Nav Item - Client -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/client">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Client</span></a>
            </li>

            <!-- Nav Item - Banner -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/banner">
                    <i class="fas fa-fw fa-suitcase"></i>
                    <span>Banner</span></a>
            </li>

            <!-- Nav Item - About Us -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/about_us">
                    <i class="fas fa-fw fa-image"></i>
                    <span>About Us</span></a>
            </li>


            <!-- Nav Item - Contact Us -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/contact_us">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Contact Us</span></a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link nav-dropdown" href="">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Setting</span></a>
                <ul class="dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="user">
                           
                            <span>User</span></a>
                    </li>
                </ul>
            </li> -->

            <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(2) != "user") {
                                        echo "collapsed";
                                    } ?>" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-image"></i>
                    <span>Setting</span></a>
                <div id="collapseTwo" class="collapse <?php if ($this->uri->segment(2) == "user") {
                                                            echo "show";
                                                        } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner">
                        <a class="collapse-item collapse-item-user" href="user"><i class="fas fa-fw fa-user"></i> &nbsp;User</a>
                    </div>
                </div>
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
                    <?php $this->load->view($data_content); ?>
                </div>
                <input id="baseurl" type="hidden" value="<?php echo base_url(); ?>" <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <?php $this->load->view("admin/footer"); ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure want to logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url() ?>admin/login/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php if ($content_modal != "") {
        $this->load->view($content_modal);
    } ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo/datatables-demo.js"></script>

    <!-- TinyMCE -->
    <script src="<?php echo base_url(); ?>assets/admin/node_modules/tinymce/tinymce.min.js" referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            min_height: 400,
            menubar: 'edit insert format',
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                ' bold italic backcolor | alignleft aligncenter ' +
                ' alignright alignjustify | bullist numlist outdent indent |' +
                ' removeformat ',
        });
    </script>
    <!-- Parsley JS -->
    <script src="<?php echo base_url(); ?>assets/admin/js/parsley.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/parsley.min.js"></script>
    <!-- Admin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/js/admin.js"></script>

    


</body>

</html>