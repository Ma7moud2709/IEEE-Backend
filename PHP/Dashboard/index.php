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
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header d-flex justify-content-between">
              <div>
                <i class="fas fa-table"></i>
                Data Table Example
              </div>
              <a class='btn btn-success' href="?page=create">Add Product</a>
            </div>
            <div class="card-body">

              <?php
              $page = '';
              if (isset($_GET['page'])) {
                $page = $_GET['page'];

                if ($page === 'delete') {
                  if (isset($_GET['id'])) {
                    $product_id = $_GET['id'];
                  }

                  $statment = $connect->prepare('DELETE FROM products WHERE product_id = ?');
                  $statment->execute(array($product_id));
                  header('Location: index.php');
                } else if ($page === 'edit') {
                  if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                  }
                  $statment = $connect->prepare('SELECT * FROM products WHERE product_id=?');
                  $statment->execute(array($id));
                  $result = $statment->fetch();
              ?>
                  <div class="col-md-10 m-auto">
                    <form method="post" action="?page=saveUpdate">

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="product_id">ID</label>
                        <input type="number" id="product_id" class="form-control" name="product_id" value="<?php echo $result['product_id']; ?>" />

                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="product_name">Product Name</label>
                        <input type="text" id="product_name" class="form-control" name="product_name" value="<?php echo $result['product_name']; ?>" />
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="product_price">Price</label>
                        <input type="number" id="product_price" class="form-control" name="product_price" value="<?php echo $result['product_price']; ?>" />
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="product_brand">Brand</label>
                        <input type="text" id="product_brand" class="form-control" name="product_brand" value="<?php echo $result['product_brand']; ?>" />
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="product_quantity">Quantity</label>
                        <input type="number" id="product_quantity" class="form-control" name="product_quantity" value="<?php echo $result['product_quantity']; ?>" />
                      </div>
                      <!-- Submit button -->

                      <input type="submit" value="Update" class="btn btn-primary btn-block mb-4">
                    </form>
                  </div>
                <?php
                } else if ($page === 'saveUpdate') {
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['old_id'])) {
                      $old_id = $_POST['old_id'];
                    }

                    $product_id = $_POST['product_id'];
                    $product_name = $_POST['product_name'];
                    $product_price = $_POST['product_price'];
                    $product_brand = $_POST['product_brand'];
                    $product_quantity = $_POST['product_quantity'];

                    $statment = $connect->prepare('UPDATE products 
                  SET product_id = ?,
                      product_name = ?,
                      product_price = ?,
                      product_brand = ?,
                      product_quantity = ?
                  WHERE product_id = ?
                  ');

                    $statment->execute(array($product_id, $product_name, $product_price, $product_brand, $product_quantity, $old_id));
                    header('Location: index.php');
                  }
                } else if ($page === 'create') {
                  $idError = $nameError = $priceError = $brandError = $quantityError = '';
                  $product_id = $product_name = $product_price = $product_brand = $product_quantity = '';
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $product_id = $_POST['product_id'];
                    $product_name = $_POST['product_name'];
                    $product_price = $_POST['product_price'];
                    $product_brand = $_POST['product_brand'];
                    $product_quantity = $_POST['product_quantity'];
                    if (empty($product_id)) {
                      $idError = '* This Field Is Required';
                    } else if (empty($product_name)) {
                      $nameError = '* This Field Is Required';
                    } else if (empty($product_price)) {
                      $priceError = '* This Field Is Required';
                    } else if (empty($product_brand)) {
                      $brandError = '* This Field Is Required';
                    } else if (empty($product_quantity)) {
                      $quantityError = '* This Field Is Required';
                    }else{
                      $statment = $connect->prepare("INSERT INTO products
                      (product_id, product_name, product_price, product_brand, product_quantity)
                      VALUES (?,?,?,?,?)
                      ");
                      $statment->execute(array($product_id, $product_name, $product_price, $product_brand, $product_quantity));
                      header('Location: index.php');
                    }
                  }
                ?>
                  <div class="col-md-10 m-auto">
                    <form method="post" action="?page=create">

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="product_id">ID</label>
                        <input type="number" id="product_id" class="form-control" name="product_id" value="<?php echo $product_id ?>"/>
                        <p class="text-danger "><?php echo $idError ?></p>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="product_name">Product Name</label>
                        <input type="text" id="product_name" class="form-control" name="product_name" value="<?php echo $product_name ?>"/>
                        <p class="text-danger "><?php echo $nameError ?></p>

                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="product_price">Price</label>
                        <input type="number" id="product_price" class="form-control" name="product_price" value="<?php echo $product_price ?>"/>
                        <p class="text-danger "><?php echo $priceError ?></p>

                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="product_brand">Brand</label>
                        <input type="text" id="product_brand" class="form-control" name="product_brand" value="<?php echo $product_brand ?>"/>
                        <p class="text-danger "><?php echo $brandError ?></p>

                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="product_quantity">Quantity</label>
                        <input type="number" id="product_quantity" class="form-control" name="product_quantity" value="<?php echo $product_quantity ?>"/>
                        <p class="text-danger "><?php echo $quantityError ?></p>

                      </div>
                      <!-- Submit button -->
                      <input type="submit" value="Save" class="btn btn-primary btn-block mb-4">

                    </form>
                  </div>
                <?php
                } else if ($page === 'saveProduct') {
                }
              } else {

                ?>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Quantity</th>
                        <th>Operations</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Quantity</th>
                        <th>Operations</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php
                      $statment = $connect->prepare('SELECT * FROM products');
                      $statment->execute();
                      $products_count =  $statment->rowCount();
                      $result = $statment->fetchAll();

                      if ($products_count > 0) {
                        foreach ($result as $product) {

                      ?>
                          <tr>
                            <td><?php echo $product['product_id']; ?> </td>
                            <td><?php echo $product['product_name']; ?> </td>
                            <td><?php echo $product['product_price']; ?> </td>
                            <td><?php echo $product['product_brand']; ?> </td>
                            <td><?php echo $product['product_quantity']; ?> </td>
                            <td class='d-flex justify-content-around  '>
                              <a href="?page=edit&id=<?php echo $product['product_id']; ?>" class='btn btn-primary'>
                                <i class="fa-solid fa-pen-to-square"></i>

                              </a>
                              <a href="?page=delete&id=<?php echo $product['product_id']; ?>" class='btn btn-danger'>
                                <i class="fa-solid fa-trash"></i>

                              </a>
                            </td>

                          </tr>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              <?php
              }
              ?>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    
<?php
include('include/templates/footer.php');
  } else {
    header('Location: login.php');
  }
?>

</html>