<?php
session_start();
include('include/templates/header.php');
if (isset($_SESSION['email']) && isset($_SESSION["password"])) {
  header('Location: index.php');
}

$usernameErr = $emailErr = $password_err = $confirmErr = '';
$username = $user_email = $user_password = $confirmPassword = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $user_email = $_POST['email'];
  $user_password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  if ($user_password != $confirmPassword) {
    $confirmErr = "Doesn't Match.!";
  } else {
    $statment = $connect->prepare('INSERT INTO users
    (user_name, user_email, user_password)
    VALUES(?,?,?)
      ');
    $statment->execute(array($username, $user_email, $user_password));
    header('Location: login.php ');
  }
}
?>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" value="<?php echo $username ?>" required="required">
              <label for="inputUsername">Username</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" value="<?php echo $user_email ?>" required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" value="<?php echo $user_password ?>" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" placeholder="Confirm password" value="<?php echo $confirmPassword ?>" required="required">
                  <label for="confirmPassword">Confirm password</label>
                  <p class='text-danger'><?php echo $confirmErr ?></p>
                </div>
              </div>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Register">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>