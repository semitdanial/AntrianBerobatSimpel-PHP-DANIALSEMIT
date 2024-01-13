<?php
include 'koneksi.php';

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

if (isset($_POST['btnSIMPAN'])) {
    // Mulai proses simpan
    $kode_antrian = $_POST['kode_antrian'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['Alamat'];
    $tanggal_daftar = $_POST['Tanggal_daftar'];

    $sql_simpan = "INSERT INTO tb_pasien (kode_antrian, nama_lengkap, Alamat, Tanggal_daftar) VALUES (
        '$kode_antrian',
        '$nama_lengkap',
        '$alamat',
        '$tanggal_daftar'
    )";
    $query_simpan = mysqli_query($konek, $sql_simpan);
    
    if ($query_simpan) {
        echo "<script>alert('Simpan Berhasil')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=tampil'>";
    } else {
        echo "<script>alert('Simpan Gagal')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=tampil'>";
    }
    // Selesai proses simpan
} else if (isset($_POST['btnUBAH'])) {
    $kode_antrian = $_POST['kode_antrian'];
    $nama_lengkap = $_POST['txtJudulBuku'];
    $alamat = $_POST['txtPenulisBuku'];
    $tanggal_daftar = $_POST['txtPenerbitBuku'];

    // Update the data in the database
    $sql_ubah = "UPDATE tb_pasien SET nama_lengkap='$nama_lengkap', Alamat='$alamat', Tanggal_daftar='$tanggal_daftar' WHERE kode_antrian='$kode_antrian'";
    $query_ubah = mysqli_query($konek, $sql_ubah);

    if ($query_ubah) {
        echo "<script>alert('Ubah Berhasil')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=tampil'>";
    } else {
        echo "<script>alert('Ubah Gagal')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=tampil'>";
    }
    // Selesai proses ubah
} else {
    if (isset($_GET['kode'])) {
        // Ambil data yang akan dihapus
        $sql_hapus = "SELECT * FROM tb_pasien WHERE kode_antrian='".$_GET['kode']."'";
        $query_hapus = mysqli_query($konek, $sql_hapus);
        $data_hapus = mysqli_fetch_array($query_hapus, MYSQLI_ASSOC);

        // Masukkan data yang dihapus ke tabel tersendiri
        $sql_pindah = "INSERT INTO tb_pasien_hapus (kode_antrian, nama_lengkap, Alamat, Tanggal_daftar) SELECT kode_antrian, nama_lengkap, Alamat, Tanggal_daftar FROM tb_pasien WHERE kode_antrian='".$_GET['kode']."'";
        $query_pindah = mysqli_query($konek, $sql_pindah);

        if ($query_pindah) {
            // Hapus data dari tabel utama
            $sql_hapus_utama = "DELETE FROM tb_pasien WHERE kode_antrian='".$_GET['kode']."'";
            $query_hapus_utama = mysqli_query($konek, $sql_hapus_utama);

            if ($query_hapus_utama) {
                echo "<script>alert('Pasien Terlayani')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=tampil'>";
            } else {
                echo "<script>alert('Hapus Gagal')</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=tampil'>";
            }
        } else {
            echo "<script>alert('Pemindahan Data Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=tampil'>";
        }
    }
}
?>