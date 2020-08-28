
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

<body style="background-color:#919191;">


  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-8">

        <div class="card o-hidden border-0 shadow-lg my-5 justify-content-center">
          <div class="card-body p-0">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="<?php echo base_url(); ?>assets/admin/img/logo.png" width="250px" style="margin-bottom:30px;"/>
                  </div>
                  <p class="medium error col-lg-12" id="error_login"></p>
                  <form class="user">
                    <div class="form-group">
                      <input type="username" class="form-control form-control-user" id="username" name="username" aria-describedby="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="username" placeholder="Password">
                    </div>
                    <button id="login" class="btn btn-primary btn-user btn-block" style="background-color:#919191;">
                      LOGIN
                    </button>                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="fa fa-arrow-left" href="<?php echo base_url(); ?>" style="color:#18011B;"></a>
                    <a class="medium" href="<?php echo base_url(); ?>" style="color:#18011B;">Back to Aviila Home Page</a>

                  </div>
                </div>
              </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-2.min.js"></script>

  <!-- Login JavaScript-->
  <script src="<?php echo base_url(); ?>assets/admin/js/login.js"></script>

</body>

</html>
