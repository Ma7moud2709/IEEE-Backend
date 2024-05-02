<?php
session_start();
include('include/templates/header.php');
?>

<body id="page-top">
  <?php
  if (isset($_SESSION['email'], $_SESSION['password'])) {
    include('include/templates/navbar.php');

    
  ?>


    <div id="wrapper">

      <?php include('include/templates/siderbar.php'); ?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Create Poduct</li>
          </ol>
          <div class="col-md-10 m-auto">
            <form method="post" action="?page=addUser">

              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="product_id">ID</label>
                <input type="number" id="product_id" class="form-control" name="product_id" />
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="product_name">Product Name</label>
                <input type="text" id="product_name" class="form-control" name="product_name" />
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="product_price">Price</label>
                <input type="number" id="product_price" class="form-control" name="product_price" />
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="product_brand">Brand</label>
                <input type="text" id="product_brand" class="form-control" name="product_brand" />
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="product_quantity">Quantity</label>
                <input type="number" id="product_quantity" class="form-control" name="product_quantity" />
              </div>
              <!-- Submit button -->
              <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Add User</button>
            </form>
          </div>

        </div>
        <!-- /.content-wrapper -->

      </div>
      <!-- /#wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="login.php">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin.min.js"></script>

</body>
<?php
  } else {
    header('Location: login.php');
  }
?>

</html>