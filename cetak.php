<?php
include 'koneksi.php';;

// Query SQL untuk mengambil data pasien
$sql_tampil = "SELECT * FROM tb_pasien_hapus";
$query_tampil = mysqli_query($konek, $sql_tampil);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Pasien</title>
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
    <h2>Data Pasien</h2>
    <p>Tanggal: <?php echo date("d/m/Y"); ?></p>
</center>


    <table>
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
    </table><br>
    
    <div class="footer">
        <p style="text-align: right; padding: 30px 70px;">Kudus, <?php echo date("d/m/Y"); ?></p>
        <p style="text-align: right; padding: 30px 70px;">(..........................)</p>
    </div>

    <script>
        // Script untuk mencetak halaman setelah selesai loading
        window.onload = function() {
            window.print();
        }
    </script>
</body>
</html>
