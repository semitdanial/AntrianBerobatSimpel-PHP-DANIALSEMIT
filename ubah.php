<?php
if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * FROM tb_pasien WHERE kode_antrian='".$_GET['kode']."'";
    $query_cek = mysqli_query($konek, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_ASSOC);

    // Tampilkan form ubah data
    ?>
    <form action="?halaman=aksi" method="post" enctype="multipart/form-data">
        <center><h2>UBAH DATA</h2></center>
        <div class="form-group">
            <label>Kode Antrian :</label>
            <input type="text" class="form-control" placeholder="Masukkan Kode Antrian" name="kode_antrian" value="<?php echo $data_cek ['kode_antrian']; ?>" required="" readonly=>
        </div>
        <div class="form-group">
            <label>Nama Lengkap : </label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" value="<?php echo $data_cek ['nama_lengkap']; ?>" required="">
        </div>
        <div class="form-group">
            <label>Alamat : </label>
            <input type="text" class="form-control" placeholder="Masukkan Alamat" name="Alamat" value="<?php echo $data_cek ['Alamat']; ?>" required="">
        </div>
        <div class="form-group">
            <label>Tanggal Daftar : </label>
            <input type="datetime-local" class="form-control" placeholder="Masukkan Tanggal Daftar" name="Tanggal_daftar" value="<?php echo $data_cek ['Tanggal_daftar']; ?>" required="">
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-warning btn-sm" name="btnUBAH">UBAH</button>
           <a href="?halaman=tampil" class='btn btn-dark btn-sm'>BATAL</a>
        </div>
    </form>
    <?php
}