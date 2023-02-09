<?php require '../Controller/connection.php' ?>
<?php
$fullName = $email = $password = $retypePassword = '';
$fullNameErr = $emailErr = $passwordErr = $retypePasswordErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['fullName'])) {
    $fullNameErr = "Enter FullName!";
  } else {
    $fullName = $_POST['fullName'];
    if (!preg_match("/^[A-Za-z-']*$/", $fullName)) {
      $fullNameErr = "Enter FullName!";
    }
  }
  if (empty($_POST['email'])) {
    $emailErr = "Enter Email!";
  } else {
    $email = $_POST['email'];
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
      $emailErr = "Invalid Format!";
    }
  }
  if (empty($_POST['password'])) {
    $passwordErr = "Enter Password!";
  } else {
    $password = $_POST['password'];
    if (!preg_match("/^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[?!@$%^&*-]).{8,}$/", $password)) {
      $passwordErr = "Invalid Format!";
    }
  }
  if (empty($_POST['retypePassword'])) {
    $retypePasswordErr = "Retype Password!";
  } else {
    $retypePassword = $_POST['retypePassword'];
    if (!preg_match("/^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[?!@$%^&*-]).{8,}$/", $retypePassword)) {
      $retypePasswordErr = "Password Dosen't Match!";
    }
  }
  if (empty($fullNameErr) && empty($emailErr) && empty($passwordErr) && empty($retypePasswordErr)) {
    $sql = "INSERT INTO users_tbl (user_name,user_email,user_password) VALUES ('$fullName','$email','$password')";
    if ($conn->query($sql) == TRUE) {
      header('Location: ../login.php');
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a class="h1"><b>Registration</b>Form</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="input-group mb-3">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              echo empty($fullNameErr) ?
                '' : '<p class="invalid-feedback d-block">' . $fullNameErr . '</p>';
            }
            ?>
            <input type="text" class="form-control <?php {echo empty($fullNameErr) ?'' : 'border-danger';}?>" placeholder="Full name" name="fullName" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              echo empty($emailErr) ?
                '' : '<p class="invalid-feedback d-block">' . $emailErr . '</p>';
            }
            ?>
            <input type="email" class="form-control" placeholder="Email" name="email" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              echo empty($passwordErr) ?
                '' : '<p class="invalid-feedback d-block">' . $passwordErr . '</p>';
            }
            ?>
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              echo empty($retypePasswordErr) ?
                '' : '<p class="invalid-feedback d-block">' . $retypePasswordErr . '</p>';
            }
            ?>
            <input type="password" class="form-control" placeholder="Retype password" name="retypePassword">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-8 pt-2">
              <a href="login.php">I already have a membership</a>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>

</html>