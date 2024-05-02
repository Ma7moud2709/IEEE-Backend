<?php
session_start();
include('include/db/db.php');
include('include/templates/header.php');
if (isset($_SESSION['email']) && isset($_SESSION["password"])) {
  header('Location: index.php');
}

$email_error = $password_error =  '';
$email = $password = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if (isset($email, $password)) {
    $statment = $connect->prepare('SELECT * FROM users');
    $statment->execute();
    $users = $statment->fetchAll();

    foreach ($users as $user) {
      if ($email == $user['user_email'] && $password == $user['user_password']) {
        $_SESSION['email'] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];
        header('Location: index.php');
      } else {
        if($password != $user['user_password']){

          $password_error = '* Wrong Password..!';
        }else if($email == $user['user_email']){

          $email_error = '* Invalid Email..!';
        }
      }
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" value="<?php echo $email ?>" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
              <br>
              <p class='text-danger '><?php echo $email_error ?></p>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" value="<?php echo $password ?>" required="required">
              <label for="inputPassword">Password</label>
              <br>
              <p class='text-danger '><?php echo $password_error ?></p>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Login">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
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