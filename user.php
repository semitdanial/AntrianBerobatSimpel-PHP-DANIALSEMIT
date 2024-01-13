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
        $sql_tampil = "SELECT * FROM tb_user";
        $query_tampil = mysqli_query($konek, $sql_tampil);
        $no = 1;
        while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['pass']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['status']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>