<?php
// Koneksi ke database
include 'koneksi.php';
if (isset($_POST['btnSMPN'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $nama = $_POST['nama'];
    $status = "user"; // Status diubah menjadi "user"

    // Query untuk menyimpan data
    $sql_simpan = "INSERT INTO tb_user (email, pass, nama, status) VALUES ('$email', '$pass', '$nama', '$status')";
    $query_simpan = mysqli_query($konek, $sql_simpan);

    if ($query_simpan) {
        echo "<script>alert('Registrasi Berhasil')</script>";
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    } else {
        echo "<script>alert('Registrasi Gagal')</script>";
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
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
  <style>
    label[for="status"] {
      display: none;
    }
  </style>
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
            <h1 class="login-title">Registrasi</h1>

            <form action="" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email anda" required autofocus>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Masukkan password" required autofocus>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required autofocus>
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <input type="hidden" name="status" id="status" value="<?php echo isset($_POST['status']) ? $_POST['status'] : ''; ?>">
                <span><?php echo isset($_POST['status']) ? $_POST['status'] : ''; ?></span>
              </div>
              <input type="submit" name="btnSMPN" value="Daftar" class="btn btn-block login-btn">
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
