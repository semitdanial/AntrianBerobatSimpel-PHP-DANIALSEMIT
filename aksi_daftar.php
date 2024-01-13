<?php
    if (isset ($_POST['btnSIMPAN'])) {
        //mulai proses simpan
        $sql_simpan = "INSERT INTO tb_pasien
        (kode_antrian,nama_lengkap, Alamat,Tanggal_daftar) VALUES (
        '".$_POST['kode_antrian']."',
        '".$_POST['nama_lengkap']."',
        '".$_POST['Alamat']."',
        '".$_POST['Tanggal_daftar']."')";
        $query_simpan = mysqli_query($konek, $sql_simpan);
        if ($query_simpan) {
            echo "<script>alert('Pendaftaran Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=antrian'>";
        }else{
            echo "<script>alert('Pendaftaran Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0;
            url=index.php?halaman=daftar'>";
        }
    }else
    if (isset($_POST['btnUBAH'])) {
        $kode_antrian = $_POST['kode_antrian'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $alamat = $_POST['Alamat'];
        $tanggal_daftar = $_POST['Tanggal_daftar'];
    
        // Update the data in the database
        $sql_ubah = "UPDATE tb_pasien SET nama_lengkap='$nama_lengkap', Alamat='$alamat', Tanggal_daftar='$tanggal_daftar' WHERE kode_antrian='$kode_antrian'";
        $query_ubah = mysqli_query($konek, $sql_ubah);
    
        if ($query_ubah) {
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=antrian'>";
        } else {
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?halaman=antrian'>";
        }

    //selesai proses ubah
    }
        ?>