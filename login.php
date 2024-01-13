<?php 
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SITUS | LAYANAN KESEHATAN</title>
  <link rel="icon" href="img/rs.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/lgn.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="img/rs.png" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in</h1>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="txUsername" id="email" class="form-control" placeholder="Masukkan email anda" required autofocus>
              </div>
              <div class="form-group mb-4">
                <label for="pass">Password</label>
                <input type="password" name="txPass" id="pass" class="form-control" placeholder="Masukkan password" required autofocus>
              </div>
              <button type="submit" name="btnLogin" class="btn btn-block login-btn">Login</button>
            </form>
            <a href="lupapassword.php" class="forgot-password-link">Forgot password?</a>
            <p class="login-wrapper-footer-text">Don't have an account? <a href="register.php" class="text-reset">Register here</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-2 d-none d-sm-block">
          <img src="img/ds.png" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
include 'koneksi.php';
    if (isset($_POST['btnLogin'])) {
        $sql_login = "SELECT * FROM tb_user WHERE email='".$_POST['txUsername']."' AND pass='".$_POST['txPass']."'";
            $query_login = mysqli_query($konek, $sql_login);
            $data_login = mysqli_fetch_array($query_login, MYSQLI_BOTH);
            $jumlah_login = mysqli_num_rows($query_login);

            if ($jumlah_login >=1) {
                session_start();
                $_SESSION["ses_username"]=$data_login['email'];
                $_SESSION["ses_status"]=$data_login['status'];

                echo "<script>alert('Login Berhasil')</script>";
                echo "<meta http-equiv='refresh' content='0; url=index.php'>";
            }else{
                session_destroy();
                echo "<script>alert('Login Gagal')</script>";
                echo "<meta http-equiv='refresh' content='0; url=login.php'>";
            }
    }
?>