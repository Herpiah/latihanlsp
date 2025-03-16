<?php
$host = "localhost";
$user = "root";  // Sesuaikan jika ada password
$pass = "";      // Kosongkan jika tidak ada password
$db   = "db_mhs";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>
