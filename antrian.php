<center>
    <h2 class="m-0 font-weight-bold text-primary">DATA PASIEN</h2>
</center>
<br>
<div class="container-fluid">
    <!-- Page Heading -->
    <p>*Disarankan sudah ditempat jika sudah berada di urutan antrian ke-3</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Urutan Pasien</h6>
        </div>
        <div class="card-body">
            <div class="table table-striped table-bordered">
            <table id="example" class="display" style="width:100%">
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
                        //perintah untuk mengambil data dari tb_pasien
                        $sql_tampil = "SELECT * FROM tb_pasien";
                        $query_tampil = mysqli_query($konek,$sql_tampil);
                        $no=1; //nilai awal no
                        while($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['kode_antrian']; ?></td>
                            <td><?php echo $data['nama_lengkap']; ?></td>
                            <td><?php echo $data['Alamat']; ?></td>
                            <td><?php echo $data['Tanggal_daftar']; ?></td>
                        </tr>
                        <?php
                        //auto increment no
                        $no++;
                        }
                        ?>
                    </tbody>
                </table>
                <script>
                    $(document).ready(function () {
    $('#example').DataTable();
});
                </script>
            </div>
        </div>
    </div>
</div>
