<?php
// Koneksi ke database
include 'koneksi.php';

if (isset($_POST['btnResetPass'])) {
    $email = $_POST['email'];
    $newPassword = $_POST['new_password'];

    // Update password pengguna
    $sql_update = "UPDATE tb_user SET pass = '$newPassword' WHERE email = '$email'";
    $query_update = mysqli_query($konek, $sql_update);

    if ($query_update) {
        echo "<script>alert('Password berhasil diubah')</script>";
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    } else {
        echo "<script>alert('Gagal mengubah password')</script>";
    }
}
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
            <h1 class="login-title">Lupa Password</h1>

            <form action="" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email anda" required autofocus>
              </div>

              <div class="form-group">
                <label for="new_password">Password Baru</label>
                <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Masukkan password baru" required>
              </div>

              <input type="submit" name="btnResetPass" value="Reset Password" class="btn btn-block login-btn">
            </form>
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
