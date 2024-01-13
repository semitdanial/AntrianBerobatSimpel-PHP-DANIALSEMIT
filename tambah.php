<?php
include 'koneksi.php';
$auto = mysqli_query($konek, "select max(kode_antrian) as max_code from tb_pasien");
$data = mysqli_fetch_array($auto);
$code = $data['max_code'];
$urutan = (int) substr($code, 1, 3);
$urutan++;
$huruf = "P";
$kd_ant = $huruf . sprintf("%03s", $urutan);
?>

<form action="?halaman=aksi" method="post" enctype="multipart/form-data">
    <center><h2>TAMBAH DATA</h2></center>
    <div class="form-group">
        <label>Kode Antrian :</label>
        <input type="text" class="form-control" value="<?php echo $kd_ant ?>" name="kode_antrian" readonly="">
    </div>
    <div class="form-group">
        <label>Nama Lengkap : </label>
        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" required="">
    </div>
    <div class="form-group">
        <label>Alamat : </label>
        <input type="text" class="form-control" placeholder="Masukkan Alamat" name="Alamat" required="">
    </div>
    <div class="form-group">
        <label>Tanggal Daftar : </label>
        <input type="datetime-local" class="form-control" placeholder="Masukkan Tanggal Daftar" name="Tanggal_daftar" required="">
    </div>
    <div class="form-group">
       <button type="submit" class="btn btn-success btn-sm" name="btnSIMPAN">SIMPAN</button>
       <a href="?halaman=tampil" class='btn btn-dark btn-sm'>BATAL</a>
    </div>
</form>
