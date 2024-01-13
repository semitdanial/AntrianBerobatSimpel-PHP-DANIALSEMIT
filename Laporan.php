<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien Terhapus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <center>
        <h2 class="m-0 font-weight-bold text-primary">DATA PASIEN TERLAYANI</h2><br>
        <a href="cetak.php" target="_blank" class="d-none d-sm-inline-block btn btn-success btn-sm"><i class="fas fa-print fa-sm text-white-50"></i>Cetak Data</a>
</center>
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
            </tr>
        </thead>
        <tbody>
            <?php
            $sql_tampil = "SELECT * FROM tb_pasien_hapus";
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
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>