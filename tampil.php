<center>
    <h2 class="m-0 font-weight-bold text-primary">DATA PASIEN</h2>
    <a href="?halaman=tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Tambah Data</a>
</center>
<br>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>NO</th>
            <th>KODE ANTRIAN</th>
            <th>NAMA LENGKAP</th>
            <th>ALAMAT</th>
            <th>TANGGAL REGISTRASI</th>
            <th>TINDAKAN</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql_tampil = "SELECT * FROM tb_pasien";
        $query_tampil = mysqli_query($konek, $sql_tampil);
        $no = 1;
        while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['kode_antrian']; ?></td>
                <td><?php echo $data['nama_lengkap']; ?></td>
                <td><?php echo $data['Alamat']; ?></td>
                <td><?php echo $data['Tanggal_daftar']; ?></td>
                <td>
                    <a href="?halaman=ubah&kode=<?php echo $data['kode_antrian']; ?>" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="?halaman=aksi&kode=<?php echo $data['kode_antrian']; ?>" onclick="return confirm('Klik OK jika pasien sudah terlayani?')" class='btn btn-success btn-sm'>Terlayani</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>