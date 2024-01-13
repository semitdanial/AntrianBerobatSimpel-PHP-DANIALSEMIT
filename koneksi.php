<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_uaspw";

$konek = new mysqli ($host, $username, $password, $database);

// Checking the successful connection
$result = array();
if ($konek->connect_error) {
    $result['Notif'] = 'Gagal!!';
    $result['Error'] = $konek->connect_error;
    echo json_encode($result);
} else {
    // Koneksi berhasil, Anda dapat melakukan operasi database di sini.
}
?>
